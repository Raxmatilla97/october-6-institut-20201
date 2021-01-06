<?php namespace Raxmatilla\AxborotMakoni;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [ 'Raxmatilla\AxborotMakoni\Components\AxborotCompo' => 'AxborotCompoment'];
    }

    public function registerSettings()
    {
    }
}
