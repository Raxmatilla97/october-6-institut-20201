<?php namespace Raxmatilla\Faoliyatlar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteRaxmatillaFaoliyatlarEkologiyaCateEko extends Migration
{
    public function up()
    {
        Schema::dropIfExists('raxmatilla_faoliyatlar_ekologiya_cate_eko');
    }
    
    public function down()
    {
        Schema::create('raxmatilla_faoliyatlar_ekologiya_cate_eko', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('cate_id');
            $table->integer('eko_id');
            $table->primary(['cate_id','eko_id']);
        });
    }
}
