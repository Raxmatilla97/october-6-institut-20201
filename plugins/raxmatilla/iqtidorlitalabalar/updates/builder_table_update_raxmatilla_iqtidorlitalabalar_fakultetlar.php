<?php namespace Raxmatilla\IqtidorliTalabalar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxmatillaIqtidorlitalabalarFakultetlar extends Migration
{
    public function up()
    {
        Schema::table('raxmatilla_iqtidorlitalabalar_fakultetlar', function($table)
        {
            $table->string('dekan_surati');
        });
    }
    
    public function down()
    {
        Schema::table('raxmatilla_iqtidorlitalabalar_fakultetlar', function($table)
        {
            $table->dropColumn('dekan_surati');
        });
    }
}
