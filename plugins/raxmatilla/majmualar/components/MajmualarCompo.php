<?php namespace Raxmatilla\Majmualar\Components;

use Cms\Classes\ComponentBase;
use Raxmatilla\Majmualar\Models\Majmualar;
class MajmualarCompo extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'MajmualarCompo Component',
            'description' => "So'ngi majmualar uchun component"
        ];
    }
    public $majmuacomp;
    public $majmuacomp2;

    public function onRun(){        
        // standart funksiya
        $sort = $this->property('sort');
        $sort = explode(' ', $sort);
        $display = $this->property('display');
        $this->majmuacomp = Majmualar::orderBy($sort[0], $sort[1])->get()->take($display);


        $sort2 = $this->property('sort2');
        $sort2 = explode(' ', $sort2);
        $display2 = $this->property('display');
        $this->majmuacomp2 = Majmualar::orderBy($sort2[0], $sort2[1])->get()->take($display2);
        
    }

    public function defineProperties()
    {
        return [
            "sort" => [
                'title' => "Majmualarni sortirofka qilish uchun",
                'type' => 'dropdown',
                'placeholder' => "Birinchi kiritilganlarni yoki so'ngi kiritilganlarni tanlash",
                'default' => "created_at desc",
                'options' => [
                    'created_at asc' => "Vaqt bo'yicha birinchi postlar chiqariladi",
                    'created_at desc' => "So'ngi yaratilgan postlar birinchi chiqadi"
                ]
            ],

            "sort2" => [
                'title' => "Majmualarni sortirofka qilish uchun",
                'type' => 'dropdown',
                'placeholder' => "Birinchi kiritilganlarni yoki so'ngi kiritilganlarni tanlash",
                'default' => "created_at desc",
                'options' => [
                    'created_at asc' => "Vaqt bo'yicha birinchi postlar chiqariladi",
                    'created_at desc' => "So'ngi yaratilgan postlar birinchi chiqadi"
                ]
            ],
            "display" => [
                'title' => "Nechta post chiqishi kerak?",
                'type' => 'string',
                'placeholder' => '3 ta post eng optimal',
                'default' => '4'
                
            ],
            "display2" => [
                'title' => "Nechta post chiqishi kerak?",
                'type' => 'string',
                'placeholder' => '3 ta post eng optimal',
                'default' => '3'
                
            ]
        ];
    }
}
