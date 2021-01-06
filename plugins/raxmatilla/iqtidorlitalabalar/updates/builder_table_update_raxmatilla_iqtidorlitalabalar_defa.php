<?php namespace Raxmatilla\IqtidorliTalabalar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxmatillaIqtidorlitalabalarDefa extends Migration
{
    public function up()
    {
        Schema::table('raxmatilla_iqtidorlitalabalar_defa', function($table)
        {
            $table->renameColumn('big_image', 'bige_image');
        });
    }
    
    public function down()
    {
        Schema::table('raxmatilla_iqtidorlitalabalar_defa', function($table)
        {
            $table->renameColumn('bige_image', 'big_image');
        });
    }
}
