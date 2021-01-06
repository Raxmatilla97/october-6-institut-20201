<?php namespace Raxmatilla\Majmualar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxmatillaMajmualarItems5 extends Migration
{
    public function up()
    {
        Schema::table('raxmatilla_majmualar_items', function($table)
        {
            $table->renameColumn('kafedra_id', 'kafedralar_id');
        });
    }
    
    public function down()
    {
        Schema::table('raxmatilla_majmualar_items', function($table)
        {
            $table->renameColumn('kafedralar_id', 'kafedra_id');
        });
    }
}
