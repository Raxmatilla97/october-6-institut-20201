<?php namespace Raxmatilla\Faoliyatlar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxmatillaFaoliyatlarEkologiyaCategory2 extends Migration
{
    public function up()
    {
        Schema::table('raxmatilla_faoliyatlar_ekologiya_category', function($table)
        {
            $table->renameColumn('category_id', 'id');
        });
    }
    
    public function down()
    {
        Schema::table('raxmatilla_faoliyatlar_ekologiya_category', function($table)
        {
            $table->renameColumn('id', 'category_id');
        });
    }
}
