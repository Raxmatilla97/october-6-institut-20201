<?php namespace Raxmatilla\BizHaqimizda\Components;

use Cms\Classes\ComponentBase;
use Raxmatilla\BizHaqimizda\Models\BizHaqimizda;

class BizHaqimizdaCompo  extends ComponentBase
{
    public $bizhaqimizda;
    
    public function componentDetails()
    {
        return [
            'name'        => 'BizHaqimizda Component',
            'description' => 'No description provided yet...'
        ];
    }

   

    public function onRun(){
     $this->bizhaqimizda = BizHaqimizda::all()->where('id', $this->property('id_find'));
      
    }

   
    public function defineProperties()
    {
        return [    
                
                // 'display' =>
                // [
                //     'title' => 'Nechtaligi',
                    
                //     'default' => '1',
                //     'placeholder' => "Sizga kerakli ko'lamni kiriting"
                   
                // ],
                'id_find' => [
                    'title'  => "Aniq bir idni kiriting",
                    'default' => 1,
                    'placeholder' => "kerakli Id ni kiriting (raqam)",
                    
                ]
        ];
    }
}
