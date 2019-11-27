<?php namespace GeneaLabs\NovaHorizon;

use Laravel\Nova\Nova;
use Laravel\Nova\Tool;

class NovaHorizon extends Tool
{
    /**
     * Perform any tasks that need to happen when the tool is booted.
     *
     * @return void
     */
    public function boot()
    {
        Nova::script('nova-horizon', __DIR__.'/../dist/js/tool.js');
        Nova::style('nova-horizon', __DIR__.'/../dist/css/tool.css');
    }

    /**
     * Build the view that renders the navigation links for the tool.
     *
     * @return \Illuminate\View\View
     */
    public function renderNavigation()
    {
        return view('nova-horizon::navigation');
    }

    /**
     * Get the Laravel Horizon Path
     * 
     * @return string
     */
    public function resolveHorizonPath(): string
    {
        return config("horizon.path");
    }
}
