<?php namespace Raxmatilla\IqtidorliTalabalar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxmatillaIqtidorlitalabalarRahbariyat extends Migration
{
    public function up()
    {
        Schema::table('raxmatilla_iqtidorlitalabalar_rahbariyat', function($table)
        {
            $table->string('qabul_vaqti');
            $table->string('telefon');
            $table->string('email');
            $table->text('biografiya');
        });
    }
    
    public function down()
    {
        Schema::table('raxmatilla_iqtidorlitalabalar_rahbariyat', function($table)
        {
            $table->dropColumn('qabul_vaqti');
            $table->dropColumn('telefon');
            $table->dropColumn('email');
            $table->dropColumn('biografiya');
        });
    }
}
