<?php namespace Raxmatilla\Faoliyatlar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxmatillaFaoliyatlarEkologiya extends Migration
{
    public function up()
    {
        Schema::table('raxmatilla_faoliyatlar_ekologiya', function($table)
        {
            $table->integer('category_id');
        });
    }
    
    public function down()
    {
        Schema::table('raxmatilla_faoliyatlar_ekologiya', function($table)
        {
            $table->dropColumn('category_id');
        });
    }
}
