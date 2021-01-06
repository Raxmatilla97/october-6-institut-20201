<?php namespace Raxmatilla\AxborotMakoni\Components;

use Cms\Classes\ComponentBase;
use Raxmatilla\AxborotMakoni\Models\AxborotMakoni;
class AxborotCompo extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Axborot makoni uchun compoment',
            'description' => 'No description provided yet...'
        ];
    }

    public $axborot;
    public $axborotcount;    

    public function onRun(){        
    $sort = $this->property('sort');
 
    $sort = explode(' ', $sort); 

    $display = $this->property('display');

        $this->axborot = AxborotMakoni::orderBy($sort[0], $sort[1])->get()->take($display);   
        // dd($this->axborot);  
        $this->axborotcount = AxborotMakoni::all()->pluck('id')->count();
    
    }

    public function defineProperties()
    {
        return [
            'display' => [
                'title' => 'Nechta post chiqishi kerakli gi haqida.',
                'default' => '3',
                'type' => 'string',
                'validationPattern' => '^[0-9]+$',
            ],
            'sort' => [
                'title' => "Sortirofkalash",
                'default' => 'created_at desc',
                'type' => 'dropdown',
                'placeholder' => 'Kerakli sortirofkalashni tanlang',
                'options' => [
                    'created_at asc' => "Birinchi yaralganlik bo'yicha ASC",
                    'created_at desc' => "So'ngi yaralganlik bo'yicha DESC"
                ]
            ]
        ];
    }
}
