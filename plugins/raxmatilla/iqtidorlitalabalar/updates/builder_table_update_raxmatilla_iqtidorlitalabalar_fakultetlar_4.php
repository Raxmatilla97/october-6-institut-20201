<?php namespace Raxmatilla\IqtidorliTalabalar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxmatillaIqtidorlitalabalarFakultetlar4 extends Migration
{
    public function up()
    {
        Schema::table('raxmatilla_iqtidorlitalabalar_fakultetlar', function($table)
        {
            $table->string('dekan_surati', 191)->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('raxmatilla_iqtidorlitalabalar_fakultetlar', function($table)
        {
            $table->string('dekan_surati', 191)->nullable(false)->change();
        });
    }
}
