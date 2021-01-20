<?php namespace Raxmatilla\IqtidorliTalabalar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxmatillaIqtidorlitalabalarMarkazBolimlar5 extends Migration
{
    public function up()
    {
        Schema::table('raxmatilla_iqtidorlitalabalar_markaz_bolimlar', function($table)
        {
            $table->dropColumn('tasklar');
        });
    }
    
    public function down()
    {
        Schema::table('raxmatilla_iqtidorlitalabalar_markaz_bolimlar', function($table)
        {
            $table->text('tasklar');
        });
    }
}
