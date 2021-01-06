<?php namespace Raxmatilla\IqtidorliTalabalar;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Raxmatilla\IqtidorliTalabalar\Components\IqtidorliComponents' => "Iqtidorli",
        ];
    }


    public function registerSettings()
    {
    }
}
