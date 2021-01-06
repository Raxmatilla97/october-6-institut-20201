<?php namespace Raxmatilla\AxborotMakoni\Models;

use Model;

/**
 * Model
 */
class AxborotMakoni extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'raxmatilla_axborotmakoni_table';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

        
    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];

    public $translatable = ['title', 'content'];

    public $belongsTo = [
        'user' => 'Backend\Models\User'
    ];



}
