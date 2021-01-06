<?php namespace Raxmatilla\IqtidorliTalabalar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxmatillaIqtidorlitalabalarDefa5 extends Migration
{
    public function up()
    {
        Schema::table('raxmatilla_iqtidorlitalabalar_defa', function($table)
        {
            $table->renameColumn('blig_content', 'big_content');
        });
    }
    
    public function down()
    {
        Schema::table('raxmatilla_iqtidorlitalabalar_defa', function($table)
        {
            $table->renameColumn('big_content', 'blig_content');
        });
    }
}
