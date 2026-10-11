<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Menu\Menu;
use App\Models\Menu\MenuCategory;
use App\Models\Menu\Submenu;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Password;
use Tests\TestCase;

class AuthAndMenusTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        foreach ([
            '0001_01_01_000000_create_users_table.php',
            '2026_09_21_182753_create_menus_table.php',
            '2026_09_21_183254_create_submenus_table.php',
            '2026_09_22_072705_create_settings_table.php',
            '2026_09_23_070200_create_pages_table.php',
            '2026_09_25_114333_add_description_to_submenus_table.php',
            '2026_10_11_220000_add_navigation_management_fields.php',
            '2026_10_11_230000_create_page_faqs_table.php',
            '2026_10_11_234000_add_user_access_fields.php',
            '2026_10_11_235000_create_menu_categories_table.php',
        ] as $file) (require database_path('migrations/'.$file))->up();
    }

    private function user(string $role='user'): User
    {
        $user = new User(['name'=>'Test '.$role,'email'=>$role.'@example.test','password'=>'StrongTestPass123']);
        $user->role=$role; $user->save(); return $user->fresh();
    }

    public function test_guests_and_users_cannot_access_admin_routes(): void
    {
        foreach (['/admin/dashboard','/admin/menus','/admin/submenus','/admin/pages','/admin/faqs','/admin/users','/admin/categories','/admin/profile'] as $path) $this->get($path)->assertRedirect('/admin/login');
        $this->post('/admin/add-menu',[])->assertRedirect('/admin/login');
        $this->get('/account')->assertRedirect('/login');
        $this->actingAs($this->user());
        $this->get('/admin/users')->assertForbidden();
        $this->post('/admin/add-menu',[])->assertForbidden();
        $this->get('/account')->assertOk();
    }

    public function test_registration_cannot_grant_admin_and_logout_works(): void
    {
        $this->post('/register', ['name'=>'New User','email'=>'NEW@example.test','password'=>'StrongTestPass123','password_confirmation'=>'StrongTestPass123','role'=>'admin','is_active'=>false])->assertRedirect('/account');
        $user=User::firstOrFail();
        $this->assertSame('user',$user->role);
        $this->assertTrue($user->is_active);
        $this->assertTrue(Hash::check('StrongTestPass123',$user->password));
        $this->get('/admin/pages')->assertForbidden();
        $this->post('/logout')->assertRedirect('/');
        $this->assertGuest();
    }

    public function test_admin_login_and_disabled_accounts(): void
    {
        $admin=$this->user('admin');
        $this->post('/admin/login',['email'=>$admin->email,'password'=>'wrong'])->assertSessionHasErrors('email');
        $this->post('/admin/login',['email'=>$admin->email,'password'=>'StrongTestPass123'])->assertRedirect('/admin/dashboard');
        $this->get('/admin/dashboard')->assertOk();
        $this->get('/admin/users')->assertOk();
        $admin->is_active=false; $admin->save();
        $this->get('/admin/pages')->assertRedirect('/login');
        $this->assertGuest();
        $this->post('/login',['email'=>$admin->email,'password'=>'StrongTestPass123'])->assertSessionHasErrors('email');
    }

    public function test_user_cannot_use_admin_login_and_attempts_are_limited(): void
    {
        $user=$this->user();
        $this->post('/admin/login',['email'=>$user->email,'password'=>'StrongTestPass123'])->assertSessionHasErrors('email');
        $this->assertGuest();
        for($i=0;$i<5;$i++)$this->post('/login',['email'=>'unknown@example.test','password'=>'wrong']);
        $this->post('/login',['email'=>'unknown@example.test','password'=>'wrong'])->assertSessionHasErrors('email');
        $this->assertStringContainsString('Too many attempts', session('errors')->first('email'));
    }

    public function test_password_profile_and_admin_access_controls(): void
    {
        $admin=$this->user('admin'); $user=$this->user();
        $this->actingAs($admin);
        $this->put('/admin/users/'.$user->id,['role'=>'admin','is_active'=>1,'current_password'=>'bad'])->assertSessionHasErrors('current_password');
        $this->put('/admin/users/'.$admin->id,['role'=>'user','is_active'=>1,'current_password'=>'StrongTestPass123'])->assertSessionHasErrors('role');
        $this->put('/admin/users/'.$user->id,['role'=>'admin','is_active'=>1,'current_password'=>'StrongTestPass123'])->assertRedirect();
        $this->assertSame('admin',$user->fresh()->role);
        $this->put('/account',['name'=>'Changed','role'=>'user'])->assertRedirect();
        $this->assertSame('admin',$admin->fresh()->role);
        $this->put('/account/password',['current_password'=>'StrongTestPass123','password'=>'NewStrongPassword123','password_confirmation'=>'NewStrongPassword123'])->assertRedirect();
        $this->assertTrue(Hash::check('NewStrongPassword123',$admin->fresh()->password));
    }

    public function test_password_reset_tokens_and_notifications(): void
    {
        Notification::fake(); $user=$this->user();
        $this->post('/forgot-password',['email'=>$user->email])->assertRedirect();
        Notification::assertSentTo($user,ResetPassword::class);
        $token=Password::createToken($user);
        $this->post('/reset-password',['email'=>$user->email,'token'=>$token,'password'=>'ResetStrongPassword123','password_confirmation'=>'ResetStrongPassword123'])->assertRedirect('/login');
        $this->assertTrue(Hash::check('ResetStrongPassword123',$user->fresh()->password));
        $this->post('/reset-password',['email'=>$user->email,'token'=>$token,'password'=>'OtherStrongPassword123','password_confirmation'=>'OtherStrongPassword123'])->assertSessionHasErrors('email');
    }

    public function test_menu_category_page_icon_creation_rename_visibility_and_delete(): void
    {
        $this->actingAs($this->user('admin'));
        $this->get('/admin/add-menu')->assertOk()->assertSee('Category & Page Links',false);
        $data=['name'=>'Test Menu','slug'=>'test-menu','url'=>'/','position'=>1,'status'=>1,'submenu'=>1,'children'=>[['page'=>'about-us','category'=>'Company Pages','icon'=>'la-cloud']]];
        $this->post('/admin/add-menu',$data)->assertRedirect('/admin/menus');
        $menu=Menu::firstOrFail(); $item=Submenu::firstOrFail(); $category=MenuCategory::firstOrFail();
        $this->assertSame('la-cloud',$item->icon);
        $this->get('/')->assertSee('Company Pages')->assertSee('la-cloud');
        $this->put('/admin/categories/'.$category->id,['menu_slug'=>'test-menu','name'=>'Updated Category','position'=>2,'is_active'=>0])->assertRedirect();
        $this->assertSame('Updated Category',$item->fresh()->category);
        $this->get('/')->assertDontSee('Updated Category');
        unset($data['children']); $data['slug']='renamed-menu';
        $this->put('/admin/menus/'.$menu->id,$data)->assertRedirect();
        $this->assertSame('renamed-menu',$item->fresh()->{'menu-slug'});
        $this->assertSame('renamed-menu',$category->fresh()->menu_slug);
        $this->delete('/admin/categories/'.$category->id)->assertRedirect();
        $this->assertNull($item->fresh()->category);
        $this->get('/')->assertSee('About Us');
        $this->post('/admin/add-menu',$data)->assertSessionHasErrors('slug');
    }
}
