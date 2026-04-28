<?php

namespace EvolutionCMS\Default\Seeders;

use EvolutionCMS\Models\SiteTemplate;
use Illuminate\Database\Seeder;

class HomeTemplateSeeder extends Seeder
{
    public function run(): void
    {
        $template = SiteTemplate::query()->find(1);

        if (!$template) {
            return;
        }

        $template->templatealias = 'home';
        $template->editedon = time();
        $template->save();
    }
}
