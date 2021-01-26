<?php namespace Raxmatilla\IqtidorliTalabalar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxmatillaIqtidorlitalabalarFakultetlar3 extends Migration
{
    public function up()
    {
        Schema::table('raxmatilla_iqtidorlitalabalar_fakultetlar', function($table)
        {
            $table->string('dekan_slug');
        });
    }
    
    public function down()
    {
        Schema::table('raxmatilla_iqtidorlitalabalar_fakultetlar', function($table)
        {
            $table->dropColumn('dekan_slug');
        });
    }
}
