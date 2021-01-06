<?php namespace Raxmatilla\Majmualar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxmatillaMajmualarIlmiyMaqolalar3 extends Migration
{
    public function up()
    {
        Schema::table('raxmatilla_majmualar_ilmiy_maqolalar', function($table)
        {
            $table->renameColumn('image', 'image_foto');
        });
    }
    
    public function down()
    {
        Schema::table('raxmatilla_majmualar_ilmiy_maqolalar', function($table)
        {
            $table->renameColumn('image_foto', 'image');
        });
    }
}
