<?php namespace Raxmatilla\BizHaqimizda\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxmatillaBizhaqimizdaItem extends Migration
{
    public function up()
    {
        Schema::table('raxmatilla_bizhaqimizda_item', function($table)
        {
            $table->string('image');
        });
    }
    
    public function down()
    {
        Schema::table('raxmatilla_bizhaqimizda_item', function($table)
        {
            $table->dropColumn('image');
        });
    }
}
