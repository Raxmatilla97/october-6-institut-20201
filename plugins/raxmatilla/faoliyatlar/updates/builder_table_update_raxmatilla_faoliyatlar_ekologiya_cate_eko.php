<?php namespace Raxmatilla\Faoliyatlar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxmatillaFaoliyatlarEkologiyaCateEko extends Migration
{
    public function up()
    {
        Schema::table('raxmatilla_faoliyatlar_ekologiya_cate_eko', function($table)
        {
            $table->primary(['cate_id','eko_id']);
        });
    }
    
    public function down()
    {
        Schema::table('raxmatilla_faoliyatlar_ekologiya_cate_eko', function($table)
        {
            $table->dropPrimary(['cate_id','eko_id']);
        });
    }
}
