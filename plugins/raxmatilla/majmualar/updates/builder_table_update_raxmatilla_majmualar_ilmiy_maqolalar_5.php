<?php namespace Raxmatilla\Majmualar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxmatillaMajmualarIlmiyMaqolalar5 extends Migration
{
    public function up()
    {
        Schema::table('raxmatilla_majmualar_ilmiy_maqolalar', function($table)
        {
            $table->dropColumn('file_upload1');
        });
    }
    
    public function down()
    {
        Schema::table('raxmatilla_majmualar_ilmiy_maqolalar', function($table)
        {
            $table->string('file_upload1', 191)->nullable();
        });
    }
}
