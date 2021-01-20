<?php namespace Raxmatilla\IqtidorliTalabalar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxmatillaIqtidorlitalabalarMarkazBolimlar4 extends Migration
{
    public function up()
    {
        Schema::table('raxmatilla_iqtidorlitalabalar_markaz_bolimlar', function($table)
        {
            $table->string('b_boshligi_avatar');
        });
    }
    
    public function down()
    {
        Schema::table('raxmatilla_iqtidorlitalabalar_markaz_bolimlar', function($table)
        {
            $table->dropColumn('b_boshligi_avatar');
        });
    }
}
