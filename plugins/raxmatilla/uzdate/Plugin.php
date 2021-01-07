<?php namespace Raxmatilla\Uzdate;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Raxmatilla\Uzdate\Components\Uzdatecomponent' => 'rusdate',

        ];
    }

    public function registerSettings()
    {
    }
}
