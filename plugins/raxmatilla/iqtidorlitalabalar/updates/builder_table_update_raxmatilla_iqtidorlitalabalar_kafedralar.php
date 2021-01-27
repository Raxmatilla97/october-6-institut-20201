<?php namespace Raxmatilla\IqtidorliTalabalar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxmatillaIqtidorlitalabalarKafedralar extends Migration
{
    public function up()
    {
        Schema::table('raxmatilla_iqtidorlitalabalar_kafedralar', function($table)
        {
            $table->string('mudir_surat');
        });
    }
    
    public function down()
    {
        Schema::table('raxmatilla_iqtidorlitalabalar_kafedralar', function($table)
        {
            $table->dropColumn('mudir_surat');
        });
    }
}
