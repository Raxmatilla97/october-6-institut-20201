<?php namespace Raxmatilla\Majmualar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxmatillaMajmualarItems9 extends Migration
{
    public function up()
    {
        Schema::table('raxmatilla_majmualar_items', function($table)
        {
            $table->text('file_upload1')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('raxmatilla_majmualar_items', function($table)
        {
            $table->text('file_upload1')->nullable(false)->change();
        });
    }
}
