<?php namespace Raxmatilla\Faoliyatlar\Models;

use Model;

/**
 * Model
 */
class IlmiyFaoliyat extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];
    public $translatable = ['title', 'content', 'hujjatlar'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'raxmatilla_faoliyatlar_ilmiy_faoliyat';

    /**
     * @var array Validation rules
     */

    public $attachOne = [
        
        
        'fayl' => 'System\Models\File',
	
    ];
    public $jsonable = ['hujjatlar'];
     
    public $rules = [
    ];
}
