<?php namespace Raxmatilla\IqtidorliTalabalar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxmatillaIqtidorlitalabalarFakultetlar2 extends Migration
{
    public function up()
    {
        Schema::table('raxmatilla_iqtidorlitalabalar_fakultetlar', function($table)
        {
            $table->dropColumn('logotip');
        });
    }
    
    public function down()
    {
        Schema::table('raxmatilla_iqtidorlitalabalar_fakultetlar', function($table)
        {
            $table->string('logotip', 191);
        });
    }
}
