<?php namespace Raxmatilla\IqtidorliTalabalar\Models;

use Model;

/**
 * Model
 */
class IqtidorliTalaba extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'raxmatilla_iqtidorlitalabalar_defa';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

       public $attachOne = [
        'bige_image' => 'System\Models\File',
        'small_avatar' => 'System\Models\File',
    
    ];
}
