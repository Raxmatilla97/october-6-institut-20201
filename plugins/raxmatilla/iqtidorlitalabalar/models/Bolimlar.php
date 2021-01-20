<?php namespace Raxmatilla\IqtidorliTalabalar\Models;

use Model;

/**
 * Model
 */
class Bolimlar extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];
    public $translatable = ['title', 'joylashuv', 'bolim_vazifalari', 'team', 'b_boshligi', 'bolim_maqsadi', 'hujjatlar'];

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'raxmatilla_iqtidorlitalabalar_markaz_bolimlar';

    public $attachOne = [
        'hujjatlar_fayl' => 'System\Models\File',
        'team_logo' => 'System\Models\File',
	
    ];
    public $jsonable = ['team', 'hujjatlar'];
    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
