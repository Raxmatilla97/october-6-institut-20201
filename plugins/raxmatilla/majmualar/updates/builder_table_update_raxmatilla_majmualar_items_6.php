<?php namespace Raxmatilla\Majmualar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxmatillaMajmualarItems6 extends Migration
{
    public function up()
    {
        Schema::table('raxmatilla_majmualar_items', function($table)
        {
            $table->dropColumn('files');
        });
    }
    
    public function down()
    {
        Schema::table('raxmatilla_majmualar_items', function($table)
        {
            $table->string('files', 191);
        });
    }
}
