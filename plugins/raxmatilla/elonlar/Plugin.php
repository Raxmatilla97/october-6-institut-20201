<?php namespace Raxmatilla\Elonlar;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Raxmatilla\Elonlar\Components\ListCompoment' => "Elonlar",
        ];
    }

    public function registerSettings()
    {
    }
}
