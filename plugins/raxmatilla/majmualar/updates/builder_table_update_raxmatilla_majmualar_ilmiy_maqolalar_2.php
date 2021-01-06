<?php namespace Raxmatilla\Majmualar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxmatillaMajmualarIlmiyMaqolalar2 extends Migration
{
    public function up()
    {
        Schema::table('raxmatilla_majmualar_ilmiy_maqolalar', function($table)
        {
            $table->integer('user_id')->nullable()->change();
            $table->string('count', 191)->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('raxmatilla_majmualar_ilmiy_maqolalar', function($table)
        {
            $table->integer('user_id')->nullable(false)->change();
            $table->string('count', 191)->nullable(false)->change();
        });
    }
}
