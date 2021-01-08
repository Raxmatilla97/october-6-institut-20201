<?php namespace Raxmatilla\Elonlar\Components;

use Cms\Classes\ComponentBase;
use Raxmatilla\Elonlar\Models\Elonlar;
class ListCompoment extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'ListCompoment Component',
            'description' => 'No description provided yet...'
        ];
    }

    public $elonlarlist;

    public function onRun(){
        $sort = $this->property('sort');
        $sort = explode(' ', $sort);
        $this->elonlarlist = Elonlar::orderBy($sort[0], $sort[1])->get()->take($this->property('display'));

    
    }



    public function defineProperties()
    {
        return [
            'sort' => [
                'title' => 'Saralash',
                'default' => 'created_ad desc',
                'type' => 'dropdown',
                'placeholder' => "Sortirofkalash",
                'options' => [
                    'created_at asc' => "Ohirgi yaralganlik bo'yicha ",
                    'created_at desc' => "Birinchi yaralganlik bo'yicha",
               ]
            
                ],
                'display' => [
                    'title' => "Nechta ko'rsatish",
        
                ]
        ];
        
    }
}
