<?php

namespace Database\Seeders;

use App\Models\PageFaq;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageFaqSeeder extends Seeder
{
    public function run(): void
    {
        DB::transaction(function () {
            $legacy = json_decode(file_get_contents(__DIR__.'/data/legacy-faqs.json'), true, 512, JSON_THROW_ON_ERROR);
            foreach (['/', 'cloud-migration', 'vps-hosting'] as $path) $this->seedPage($path, $legacy);
            $defaults = [
                ['question'=>'Is this suitable for our current setup?', 'answer'=>'Suitability depends on your systems, locations, user count and requirements. Share your existing setup so our team can assess compatibility and available options.'],
                ['question'=>'How do we get pricing?', 'answer'=>'Contact us with your requirements for a tailored quotation. Pricing, licensing, availability and service terms are confirmed before you proceed.'],
                ['question'=>'What is needed to get started?', 'answer'=>'Provide your business use case, preferred rollout timeline and relevant technical details. Our team will help define the scope and deployment steps.'],
            ];
            foreach (config('business_services', []) as $services) {
                foreach ($services as $service) $this->seedPage($service[0], $defaults);
            }
        });
    }

    private function seedPage(string $path, array $items): void
    {
        // Only import once, so rerunning deployment never restores deleted or edited FAQs.
        if (DB::table('page_faq_imports')->where('page_path', $path)->exists()) return;
        if (!PageFaq::where('page_path', $path)->exists()) {
            foreach ($items as $position => $item) PageFaq::create($item + ['page_path'=>$path, 'position'=>$position, 'is_active'=>true]);
        }
        DB::table('page_faq_imports')->insert(['page_path'=>$path]);
    }
}
