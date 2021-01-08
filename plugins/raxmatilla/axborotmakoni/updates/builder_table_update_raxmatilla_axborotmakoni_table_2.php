<?php namespace Raxmatilla\AxborotMakoni\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxmatillaAxborotmakoniTable2 extends Migration
{
    public function up()
    {
        Schema::table('raxmatilla_axborotmakoni_table', function($table)
        {
            $table->text('small_content')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('raxmatilla_axborotmakoni_table', function($table)
        {
            $table->dropColumn('small_content');
        });
    }
}
