<?php namespace Raxmatilla\Majmualar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxmatillaMajmualarItems8 extends Migration
{
    public function up()
    {
        Schema::table('raxmatilla_majmualar_items', function($table)
        {
            $table->text('file_upload1');
        });
    }
    
    public function down()
    {
        Schema::table('raxmatilla_majmualar_items', function($table)
        {
            $table->dropColumn('file_upload1');
        });
    }
}
