<?php namespace Raxmatilla\Majmualar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxmatillaMajmualarItems extends Migration
{
    public function up()
    {
        Schema::table('raxmatilla_majmualar_items', function($table)
        {
            $table->string('count');
        });
    }
    
    public function down()
    {
        Schema::table('raxmatilla_majmualar_items', function($table)
        {
            $table->dropColumn('count');
        });
    }
}
