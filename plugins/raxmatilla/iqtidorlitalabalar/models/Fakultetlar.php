<?php namespace Raxmatilla\IqtidorliTalabalar\Models;

use Model;

/**
 * Model
 */
class Fakultetlar extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];
    public $translatable = ['title', 'content', 'hujjatlar', 'teamlar', 'kafedralar', 'dekan_fish', 'fakultet_joylashuvi'];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'raxmatilla_iqtidorlitalabalar_fakultetlar';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $attachOne = [     
        'fayl' => 'System\Models\File',       
        'hujjat_file' => 'System\Models\File',
        'hodim_surati' => 'System\Models\File',
    
        ];
        
    public $jsonable = ['hujjatlar', 'teamlar', 'kafedralar'];
}
