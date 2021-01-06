<?php namespace Raxmatilla\BizHaqimizda\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxmatillaBizhaqimizdaItem2 extends Migration
{
    public function up()
    {
        Schema::table('raxmatilla_bizhaqimizda_item', function($table)
        {
            $table->dropColumn('list_url');
        });
    }
    
    public function down()
    {
        Schema::table('raxmatilla_bizhaqimizda_item', function($table)
        {
            $table->string('list_url', 191)->nullable();
        });
    }
}
