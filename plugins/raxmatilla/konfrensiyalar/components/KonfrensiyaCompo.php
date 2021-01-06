<?php namespace Raxmatilla\Konfrensiyalar\Components;

use Cms\Classes\ComponentBase;
use Raxmatilla\Konfrensiyalar\Models\Konfrensiyalar;
class KonfrensiyaCompo extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Konfrensiyalar uchun component',
            'description' => 'No description provided yet...'
        ];
    }

    public $konfrense;

    public function onRun(){

        $sort = $this->property('sort');
        $sort = explode(' ', $sort);

        $display = $this->property('display');

        $this->konfrense = Konfrensiyalar::orderBy($sort[0], $sort[1])->get()->take($display);

      
    }

    public function defineProperties()
    {
        return [
            'display' => [
                'title' => 'Nechta konfrensiya korinadi?',
                'default' => '4',
                'placeholder' => "Faqat raqam yozilsin!",               
            ],

            'sort' => [
                'title' => "Sortirofkalash",
                'type' => 'dropdown',
                'default' => 'created_at desc',
                'placeholder' => "Saralash uchun kerakli sort turini tanlang",
                'options' => [
                    'created_at asc' => 'Birinchi yaratilganlar ASC',
                    'created_at desc' => 'Ohirgi yaratilganlar Desc'
                ]
            ]
        ];
    }
}
