<?php namespace Raxmatilla\Faoliyatlar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxmatillaFaoliyatlarMoliyaviyFaoliyat extends Migration
{
    public function up()
    {
        Schema::table('raxmatilla_faoliyatlar_moliyaviy_faoliyat', function($table)
        {
            $table->boolean('active')->default(false);
        });
    }
    
    public function down()
    {
        Schema::table('raxmatilla_faoliyatlar_moliyaviy_faoliyat', function($table)
        {
            $table->dropColumn('active');
        });
    }
}
