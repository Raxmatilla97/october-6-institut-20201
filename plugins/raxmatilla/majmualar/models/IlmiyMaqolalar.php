<?php namespace Raxmatilla\Majmualar\Models;

use Model;

/**
 * Model
 */
class IlmiyMaqolalar extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    protected $fillable = [
        'image'
    ];
    /**
     * @var string The database table used by the model.
     */
    public $table = 'raxmatilla_majmualar_ilmiy_maqolalar';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    
    public $attachMany = [
        'file_upload1' => 'System\Models\File'
        

    ];
    public $attachOne  = [
        'image_foto' => 'System\Models\File'
    ];

     //public $jsonable = ['image_foto'];



    public $belongsTo = [
                'user' => 'Backend\Models\User'
    ];
}
