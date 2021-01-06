<?php namespace Raxmatilla\BizHaqimizda\Components;

use Cms\Classes\ComponentBase;
use Raxmatilla\BizHaqimizda\Models\Hisoblagich;
class HisoblagichCompo extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Hisoblagich Component',
            'description' => 'Saytda hisoblagichni ishlatish uchun component'
        ];
    }
    public $hisoblash;
    public function onRun(){
        $this->hisoblash = Hisoblagich::all();
   

    }

    public function defineProperties()
    {
        return [];
    }
}
