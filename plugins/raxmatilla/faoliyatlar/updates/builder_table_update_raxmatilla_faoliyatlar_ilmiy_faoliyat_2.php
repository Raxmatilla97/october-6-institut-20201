<?php namespace Raxmatilla\Faoliyatlar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxmatillaFaoliyatlarIlmiyFaoliyat2 extends Migration
{
    public function up()
    {
        Schema::table('raxmatilla_faoliyatlar_ilmiy_faoliyat', function($table)
        {
            $table->renameColumn('image', 'images');
        });
    }
    
    public function down()
    {
        Schema::table('raxmatilla_faoliyatlar_ilmiy_faoliyat', function($table)
        {
            $table->renameColumn('images', 'image');
        });
    }
}
