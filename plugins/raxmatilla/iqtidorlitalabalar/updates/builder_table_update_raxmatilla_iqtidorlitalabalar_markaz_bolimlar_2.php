<?php namespace Raxmatilla\IqtidorliTalabalar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxmatillaIqtidorlitalabalarMarkazBolimlar2 extends Migration
{
    public function up()
    {
        Schema::table('raxmatilla_iqtidorlitalabalar_markaz_bolimlar', function($table)
        {
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::table('raxmatilla_iqtidorlitalabalar_markaz_bolimlar', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
