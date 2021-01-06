<?php namespace Raxmatilla\Elonlar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxmatillaElonlarTable4 extends Migration
{
    public function up()
    {
        Schema::table('raxmatilla_elonlar_table', function($table)
        {
            $table->bigInteger('categoriya_id')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('raxmatilla_elonlar_table', function($table)
        {
            $table->dropColumn('categoriya_id');
        });
    }
}
