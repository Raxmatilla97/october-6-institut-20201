<?php
use Pkurg\Mediauploadname\Models\Settings;

Route::get('MediaUploadNamePlugin.js', function () {

    $scripts = \View::make('pkurg.mediauploadname::media');

    $prefix = Settings::get('prefix');
    if (is_null($prefix)) {
        $prefix = '';
    }
    $postfix = Settings::get('postfix');
    if (is_null($postfix)) {
        $postfix = '';
    }

    if (Settings::get('dateformat') == '1') {

        $prefix = date($prefix);

    }

    if (Settings::get('slugablefilename') == '1') {
        $params = "renameFile: function (file) {
			let newName = '" . $prefix . "' + slugify(file.name) + '" . $postfix . "';
			return newName;
		},";
    } else {
        $params = "renameFile: function (file) {
			let newName = '" . $prefix . "' + file.name + '" . $postfix . "';
			return newName;
		},";

    }

    $scripts = str_replace("%dropzoneparams%", $params, $scripts);

    return response($scripts, 200)->header('Content-Type', 'text/javascript');

});
