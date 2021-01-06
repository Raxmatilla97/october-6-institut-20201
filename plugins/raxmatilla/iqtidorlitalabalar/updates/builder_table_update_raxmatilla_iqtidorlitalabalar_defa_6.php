<?php namespace Raxmatilla\IqtidorliTalabalar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxmatillaIqtidorlitalabalarDefa6 extends Migration
{
    public function up()
    {
        Schema::table('raxmatilla_iqtidorlitalabalar_defa', function($table)
        {
            $table->dropColumn('big_image');
        });
    }
    
    public function down()
    {
        Schema::table('raxmatilla_iqtidorlitalabalar_defa', function($table)
        {
            $table->string('big_image', 191)->nullable();
        });
    }
}
