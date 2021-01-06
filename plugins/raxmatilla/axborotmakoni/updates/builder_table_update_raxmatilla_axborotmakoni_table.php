<?php namespace Raxmatilla\AxborotMakoni\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxmatillaAxborotmakoniTable extends Migration
{
    public function up()
    {
        Schema::table('raxmatilla_axborotmakoni_table', function($table)
        {
            $table->bigInteger('user_id');
        });
    }
    
    public function down()
    {
        Schema::table('raxmatilla_axborotmakoni_table', function($table)
        {
            $table->dropColumn('user_id');
        });
    }
}
