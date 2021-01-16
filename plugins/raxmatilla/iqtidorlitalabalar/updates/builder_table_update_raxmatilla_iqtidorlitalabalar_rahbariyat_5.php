<?php namespace Raxmatilla\IqtidorliTalabalar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxmatillaIqtidorlitalabalarRahbariyat5 extends Migration
{
    public function up()
    {
        Schema::table('raxmatilla_iqtidorlitalabalar_rahbariyat', function($table)
        {
            $table->string('ilmiy_daraja');
        });
    }
    
    public function down()
    {
        Schema::table('raxmatilla_iqtidorlitalabalar_rahbariyat', function($table)
        {
            $table->dropColumn('ilmiy_daraja');
        });
    }
}
