<?php namespace Pkurg\Mediauploadname;

use App;
use Event;
use Pkurg\Mediauploadname\Models\Settings;
use System\Classes\PluginBase;
use System\Classes\SettingsManager;

class Plugin extends PluginBase
{

    public function registerSettings()
    {

        return [
            'settings' => [
                'label' => 'Media Upload Name',
                'description' => 'Manage Media Upload File Name',
                'category' => SettingsManager::CATEGORY_CMS,
                'icon' => 'oc-icon-upload',
                'class' => 'Pkurg\Mediauploadname\Models\Settings',
                'order' => 500,
                //'permissions' => ['pkurg.blogfakedata.manage'],

            ],
        ];
    }

    public function boot()
    {

        if (is_null(Settings::get('slugablefilename'))) {

            Settings::set('slugablefilename', 1);
        }

        if (App::runningInBackend()) {
            Event::listen('backend.page.beforeDisplay', function ($controller, $action, $params) {
                $controller->addJs(url('plugins/pkurg/mediauploadname/assets/slugify.js'), 'Pkurg.Mediauploadname');
                $controller->addJs(url('MediaUploadNamePlugin.js'), uniqid());

            });
        }

    }
}
