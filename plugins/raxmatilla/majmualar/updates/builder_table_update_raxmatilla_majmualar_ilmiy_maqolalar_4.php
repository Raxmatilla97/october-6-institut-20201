<?php namespace Raxmatilla\Majmualar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxmatillaMajmualarIlmiyMaqolalar4 extends Migration
{
    public function up()
    {
        Schema::table('raxmatilla_majmualar_ilmiy_maqolalar', function($table)
        {
            $table->dropColumn('image_foto');
        });
    }
    
    public function down()
    {
        Schema::table('raxmatilla_majmualar_ilmiy_maqolalar', function($table)
        {
            $table->string('image_foto', 191)->nullable();
        });
    }
}
