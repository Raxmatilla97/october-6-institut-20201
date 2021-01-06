<?php

namespace Pkurg\Mediauploadname\Models;

use Model;

class Settings extends Model
{

    public $implement = ['System.Behaviors.SettingsModel'];

    public $settingsCode = 'mediauploadname_settings';

    public $settingsFields = 'fields.yaml';

    protected $cache = [];

    

}
