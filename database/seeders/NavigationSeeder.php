<?php

namespace Database\Seeders;

use App\Models\Menu\Menu;
use App\Models\Menu\Submenu;
use App\Models\Menu\MenuCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NavigationSeeder extends Seeder
{
    public function run(): void
    {
        DB::transaction(function () {
            foreach ([['services', 'SERVICES', '/business-services', 1], ['business-solutions', 'Business Solutions', '/business-services', 1], ['about-us', 'About Us', '/about-us', 0], ['partners', 'PARTNERS', '/partners', 1], ['industries', 'INDUSTRIES', '/industries', 1], ['pricing', 'Pricing', '/pricing', 0], ['contact', 'Contact Us', '/contact', 0]] as $position => [$slug, $name, $url, $children]) {
                Menu::firstOrCreate(['slug' => $slug], ['name' => $name, 'url' => $url, 'position' => $position, 'submenu' => $children, 'status' => 1]);
            }
            Menu::where('slug', 'services')->whereNull('url')->update(['url' => '/business-services']);
            foreach (['dedicated-server'=>'Dedicated Server','cloud-migration'=>'Cloud Migration','vps-hosting'=>'VPS Hosting','cloud-servers'=>'Cloud Servers','private-cloud'=>'Private Cloud','colocation'=>'Colocation','firewall'=>'Firewall','it-amc'=>'IT AMC'] as $slug=>$name) {
                Submenu::firstOrCreate(['menu-slug'=>'services','submenu-slug'=>$slug], ['submenu'=>$name,'position'=>0,'icon'=>'la-server','status'=>1]);
            }
            $icons = ['SD-WAN & Connectivity' => 'la-network-wired', 'Security' => 'la-shield-alt', 'Collaboration & Communication' => 'la-video', 'Cloud & Productivity' => 'la-cloud', 'Voice & Messaging Services' => 'la-phone'];
            $position = 0;
            foreach (config('business_services') as $category => $services) {
                MenuCategory::firstOrCreate(['menu_slug'=>'business-solutions','name'=>$category], ['position'=>$position,'is_active'=>true]);
                foreach ($services as $service) {
                    Submenu::firstOrCreate(['menu-slug' => 'business-solutions', 'submenu-slug' => $service[0]], ['submenu' => $service[1], 'description' => $service[3], 'category' => $category, 'position' => $position++, 'icon' => $icons[$category], 'status' => 1]);
                }
            }
            foreach (['partners' => [['Cloud Partner', 'partners#cloud', 'la-cloud'], ['Data Center Partners', 'partners#data-center', 'la-server'], ['Security Partners', 'partners#security', 'la-shield-alt'], ['Technology Partners', 'partners#technology', 'la-network-wired']], 'industries' => [['Health Care', 'industries#health-care', 'la-heartbeat'], ['Education', 'industries#education', 'la-graduation-cap'], ['Retail', 'industries#retail', 'la-store'], ['Manufacturing', 'industries#manufacturing', 'la-industry'], ['Hospitality', 'industries#hospitality', 'la-hotel'], ['Travel', 'industries#travel', 'la-plane']]] as $parent => $items) {
                foreach ($items as $position => [$name, $url, $icon]) {
                    Submenu::firstOrCreate(['menu-slug' => $parent, 'submenu-slug' => $url], ['submenu' => $name, 'position' => $position, 'icon' => $icon, 'status' => 1]);
                }
            }
        });
    }
}
