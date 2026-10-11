<?php

namespace Tests\Feature;

use App\Models\PageFaq;
use Database\Seeders\PageFaqSeeder;
use Tests\TestCase;

class PageFaqTest extends TestCase
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
        $admin = new \App\Models\User(['name'=>'Test Admin','email'=>'faq-admin@example.test','password'=>'StrongTestPass123']);
        $admin->role='admin'; $admin->save();
        $this->actingAs($admin->fresh());
    }

    public function test_page_faq_crud_visibility_isolation_and_escaping(): void
    {
        $data = ['page_path'=>'about-us','question'=>'FAQ test question','answer'=>'<script>alert(1)</script>\nSecond line','position'=>2,'is_active'=>1];
        $this->post('/admin/faqs', $data)->assertRedirect();
        $item = PageFaq::firstOrFail();
        $this->get('/about-us')->assertOk()->assertSee('FAQ test question')->assertSee('&lt;script&gt;', false)->assertDontSee('<script>alert(1)</script>', false);
        $this->get('/contact')->assertDontSee('FAQ test question');
        $this->get('/admin/faqs/'.$item->id.'/edit')->assertOk();
        $this->put('/admin/faqs/'.$item->id, $data + [])->assertRedirect();
        $this->put('/admin/faqs/'.$item->id, array_replace($data, ['question'=>'Updated question', 'page_path'=>'contact']))->assertRedirect();
        $this->get('/contact')->assertSee('Updated question');
        $this->get('/about-us')->assertDontSee('Updated question');
        $this->patch('/admin/faqs/'.$item->id.'/visibility', ['is_active'=>0])->assertRedirect();
        $this->get('/contact')->assertDontSee('Updated question');
        $this->delete('/admin/faqs/'.$item->id)->assertRedirect();
        $this->assertDatabaseMissing('page_faqs', ['id'=>$item->id]);
    }

    public function test_validation_and_page_management(): void
    {
        $this->get('/admin/pages')->assertOk()->assertSee('Home')->assertSee('About Us');
        $this->get('/admin/faqs/create?page=about-us')->assertOk();
        $this->post('/admin/faqs', ['page_path'=>'admin/dashboard','question'=>'','answer'=>'','position'=>-1,'is_active'=>8])->assertSessionHasErrors(['page_path','question','answer','position','is_active']);
        $this->assertDatabaseCount('page_faqs', 0);
    }

    public function test_order_and_seed_does_not_restore_deleted_faqs(): void
    {
        $this->seed(PageFaqSeeder::class);
        $item = PageFaq::where('page_path','sd-wan-iflx')->firstOrFail();
        $item->delete();
        $count = PageFaq::count();
        $this->seed(PageFaqSeeder::class);
        $this->assertDatabaseCount('page_faqs', $count);
        PageFaq::create(['page_path'=>'about-us','question'=>'Last question','answer'=>'Last answer','position'=>9,'is_active'=>true]);
        PageFaq::create(['page_path'=>'about-us','question'=>'First question','answer'=>'First answer','position'=>0,'is_active'=>true]);
        $this->get('/about-us')->assertSeeInOrder(['First question','Last question']);
        $this->get('/sd-wan-iflx')->assertSee('page-faq-heading', false)->assertDontSee($item->question);
    }
}
