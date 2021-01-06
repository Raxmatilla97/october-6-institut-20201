<?php namespace Raxmatilla\BizHaqimizda\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxmatillaBizhaqimizdaItem3 extends Migration
{
    public function up()
    {
        Schema::table('raxmatilla_bizhaqimizda_item', function($table)
        {
            $table->renameColumn('list_key', 'list_key_chap');
        });
    }
    
    public function down()
    {
        Schema::table('raxmatilla_bizhaqimizda_item', function($table)
        {
            $table->renameColumn('list_key_chap', 'list_key');
        });
    }
}
