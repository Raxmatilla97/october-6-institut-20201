<?php namespace Raxmatilla\IqtidorliTalabalar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxmatillaIqtidorlitalabalarRahbariyat4 extends Migration
{
    public function up()
    {
        Schema::table('raxmatilla_iqtidorlitalabalar_rahbariyat', function($table)
        {
            $table->integer('number');
        });
    }
    
    public function down()
    {
        Schema::table('raxmatilla_iqtidorlitalabalar_rahbariyat', function($table)
        {
            $table->dropColumn('number');
        });
    }
}
