<?php namespace Raxmatilla\IqtidorliTalabalar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxmatillaIqtidorlitalabalarMarkazBolimlar3 extends Migration
{
    public function up()
    {
        Schema::table('raxmatilla_iqtidorlitalabalar_markaz_bolimlar', function($table)
        {
            $table->text('bolim_maqsadi');
            $table->text('tasklar');
            $table->renameColumn('content', 'bolim_vazifalari');
        });
    }
    
    public function down()
    {
        Schema::table('raxmatilla_iqtidorlitalabalar_markaz_bolimlar', function($table)
        {
            $table->dropColumn('bolim_maqsadi');
            $table->dropColumn('tasklar');
            $table->renameColumn('bolim_vazifalari', 'content');
        });
    }
}
