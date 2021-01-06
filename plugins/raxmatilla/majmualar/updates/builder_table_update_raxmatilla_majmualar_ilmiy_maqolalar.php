<?php namespace Raxmatilla\Majmualar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxmatillaMajmualarIlmiyMaqolalar extends Migration
{
    public function up()
    {
        Schema::table('raxmatilla_majmualar_ilmiy_maqolalar', function($table)
        {
            $table->string('image', 191)->nullable()->change();
            $table->string('file_upload1', 191)->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('raxmatilla_majmualar_ilmiy_maqolalar', function($table)
        {
            $table->string('image', 191)->nullable(false)->change();
            $table->string('file_upload1', 191)->nullable(false)->change();
        });
    }
}
