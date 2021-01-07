<?php namespace Raxmatilla\Uzdate\Components;

use Cms\Classes\ComponentBase;

class Uzdatecomponent extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'uzdatecomponent Component',
            'description' => 'No description provided yet...'
        ];
    }
    function onStart()
{
    $date=explode(".", date("d.m.Y"));
    switch ($date[1]){
        case 1: $m='января'; break;
        case 2: $m='февраля'; break;
        case 3: $m='марта'; break;
        case 4: $m='апреля'; break;
        case 5: $m='мая'; break;
        case 6: $m='июня'; break;
        case 7: $m='июля'; break;
        case 8: $m='августа'; break;
        case 9: $m='сентября'; break;
        case 10: $m='октября'; break;
        case 11: $m='ноября'; break;
        case 12: $m='декабря'; break;
    }
    $this["rusdate"] = $date[0].' '.$m.' '.$date[2];
}

    public function defineProperties()
    {
        return [];
    }
}
