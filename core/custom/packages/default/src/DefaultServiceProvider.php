<?php

namespace EvolutionCMS\Default;

use EvolutionCMS\ServiceProvider;

class DefaultServiceProvider extends ServiceProvider
{
    protected $namespace = 'default';

    public function boot(): void
    {
        $this->loadViewsFrom(dirname(__DIR__) . '/views', 'default');
    }

    public function register(): void
    {
    }
}
