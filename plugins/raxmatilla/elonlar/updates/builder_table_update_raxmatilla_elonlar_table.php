<?php namespace Raxmatilla\Elonlar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxmatillaElonlarTable extends Migration
{
    public function up()
    {
        Schema::table('raxmatilla_elonlar_table', function($table)
        {
            $table->string('image');
        });
    }
    
    public function down()
    {
        Schema::table('raxmatilla_elonlar_table', function($table)
        {
            $table->dropColumn('image');
        });
    }
}
