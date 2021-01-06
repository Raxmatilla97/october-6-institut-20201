<?php namespace Raxmatilla\Elonlar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxmatillaElonlarTable2 extends Migration
{
    public function up()
    {
        Schema::table('raxmatilla_elonlar_table', function($table)
        {
            $table->integer('category_id');
        });
    }
    
    public function down()
    {
        Schema::table('raxmatilla_elonlar_table', function($table)
        {
            $table->dropColumn('category_id');
        });
    }
}
