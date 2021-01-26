<?php namespace Raxmatilla\Faoliyatlar\Models;

use Model;

/**
 * Model
 */
class Ekologiya extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];
    public $translatable = ['title', 'content', 'hujjatlar'];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'raxmatilla_faoliyatlar_ekologiya';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    
    public $belongsToMany = [
        'category' => [
            'Raxmatilla\Faoliyatlar\Models\EkologiyaCategory',
            'table' => 'raxmatilla_faoliyatlar_ekologiya_category',
            'order' => 'title'
        ]
    ];

    public $belongsTo = [
           'category' => ['Raxmatilla\Faoliyatlar\Models\EkologiyaCategory', 'key' => 'category_id']
        
            ];



    public $attachOne = [     
        'fayl' => 'System\Models\File',
        ];
        
    public $jsonable = ['hujjatlar'];
}
