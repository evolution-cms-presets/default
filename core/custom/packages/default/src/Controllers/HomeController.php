<?php

namespace EvolutionCMS\Default\Controllers;

class HomeController extends BaseController
{
    public function render(): void
    {
        $this->data['preset'] = [
            'name' => 'default',
            'theme' => '/themes/default',
        ];
    }
}
