<?php namespace Raxmatilla\IqtidorliTalabalar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxmatillaIqtidorlitalabalarDefa3 extends Migration
{
    public function up()
    {
        Schema::table('raxmatilla_iqtidorlitalabalar_defa', function($table)
        {
            $table->dropColumn('small_avatar');
            $table->dropColumn('bige_image');
            $table->dropColumn('big_image');
        });
    }
    
    public function down()
    {
        Schema::table('raxmatilla_iqtidorlitalabalar_defa', function($table)
        {
            $table->string('small_avatar', 191);
            $table->string('bige_image', 191);
            $table->string('big_image', 191)->nullable();
        });
    }
}
