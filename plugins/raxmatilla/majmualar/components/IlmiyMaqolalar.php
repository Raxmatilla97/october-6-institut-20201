<?php namespace Raxmatilla\Majmualar\Components;

use Raxmatilla\Majmualar\Models\IlmiyMaqolalar as Model;
use Cms\Classes\ComponentBase;

class IlmiyMaqolalar extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'IlmiyMaqolalar Component',
            'description' => 'No description provided yet...'
        ];
    }

    public $ilmiymaqola;
    public function onRun(){
        // Standart funksiyalar
        $sort = $this->property('sort');
        $sort = explode(' ', $sort);
        $display = $this->property('display');
        $this->ilmiymaqola = Model::orderBy($sort[0], $sort[1])->get()->take($display);
        // dd($this->ilmiymaqola);

       

    }
 

    public function defineProperties()
    {
        return [

            "sort" => [
                'title' => "Ilmiy maqolalarni sortirofka qilish uchun",
                'type' => 'dropdown',
                'placeholder' => "Birinchi kiritilganlarni yoki so'ngi kiritilganlarni tanlash",
                'default' => "created_at desc",
                'options' => [
                    'created_at asc' => "Vaqt bo'yicha birinchi postlar chiqariladi",
                    'created_at desc' => "So'ngi yaratilgan postlar birinchi chiqadi"
                ],
            ],
            "display" => [
                'title' => "Nechta post chiqishi kerak?",
                'type' => 'string',
                'placeholder' => '3 ta post eng optimal',
                'default' => '4'
                
            ]
        ];
    }
}
