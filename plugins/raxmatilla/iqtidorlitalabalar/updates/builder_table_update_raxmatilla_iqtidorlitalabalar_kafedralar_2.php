<?php namespace Raxmatilla\IqtidorliTalabalar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxmatillaIqtidorlitalabalarKafedralar2 extends Migration
{
    public function up()
    {
        Schema::table('raxmatilla_iqtidorlitalabalar_kafedralar', function($table)
        {
            $table->string('fakultet');
        });
    }
    
    public function down()
    {
        Schema::table('raxmatilla_iqtidorlitalabalar_kafedralar', function($table)
        {
            $table->dropColumn('fakultet');
        });
    }
}
