<?php namespace Raxmatilla\Faoliyatlar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRaxmatillaFaoliyatlarEkologiyaCateEko extends Migration
{
    public function up()
    {
        Schema::create('raxmatilla_faoliyatlar_ekologiya_cate_eko', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('cate_id');
            $table->integer('eko_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('raxmatilla_faoliyatlar_ekologiya_cate_eko');
    }
}
