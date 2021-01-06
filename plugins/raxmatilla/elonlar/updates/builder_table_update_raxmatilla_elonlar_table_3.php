<?php namespace Raxmatilla\Elonlar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxmatillaElonlarTable3 extends Migration
{
    public function up()
    {
        Schema::table('raxmatilla_elonlar_table', function($table)
        {
            $table->bigInteger('category_id')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('raxmatilla_elonlar_table', function($table)
        {
            $table->integer('category_id')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
