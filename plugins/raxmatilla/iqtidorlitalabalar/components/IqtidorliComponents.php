<?php namespace Raxmatilla\IqtidorliTalabalar\Components;

use Cms\Classes\ComponentBase;
use Raxmatilla\IqtidorliTalabalar\Models\IqtidorliTalaba;
class IqtidorliComponents extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'ListCompoment Component',
            'description' => 'No description provided yet...'
        ];
    }

    public $iqtalabalar;

    public function onRun(){
        $sort = $this->property('sort');
        $sort = explode(' ', $sort);
        $this->iqtalabalar = IqtidorliTalaba::orderBy($sort[0], $sort[1])->get()->take($this->property('display'));
     //dump($this->iqtalabalar);

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


