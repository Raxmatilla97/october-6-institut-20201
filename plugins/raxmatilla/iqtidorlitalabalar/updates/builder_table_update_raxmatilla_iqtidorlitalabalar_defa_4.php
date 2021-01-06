<?php namespace Raxmatilla\IqtidorliTalabalar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxmatillaIqtidorlitalabalarDefa4 extends Migration
{
    public function up()
    {
        Schema::table('raxmatilla_iqtidorlitalabalar_defa', function($table)
        {
            $table->string('big_image')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('raxmatilla_iqtidorlitalabalar_defa', function($table)
        {
            $table->dropColumn('big_image');
        });
    }
}
