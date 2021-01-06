<?php namespace Raxmatilla\BizHaqimizda;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Raxmatilla\BizHaqimizda\Components\BizHaqimizdaCompo' => 'BizHaqimizdaComponent',
            'Raxmatilla\BizHaqimizda\Components\HisoblagichCompo' => 'Hisoblagich',
        ];
    }


    public function registerSettings()
    {
      
    }
}
