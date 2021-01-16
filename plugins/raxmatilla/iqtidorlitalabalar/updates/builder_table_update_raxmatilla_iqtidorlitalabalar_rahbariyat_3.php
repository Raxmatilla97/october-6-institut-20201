<?php namespace Raxmatilla\IqtidorliTalabalar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxmatillaIqtidorlitalabalarRahbariyat3 extends Migration
{
    public function up()
    {
        Schema::table('raxmatilla_iqtidorlitalabalar_rahbariyat', function($table)
        {
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::table('raxmatilla_iqtidorlitalabalar_rahbariyat', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
