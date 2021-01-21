<?php namespace Raxmatilla\Faoliyatlar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRaxmatillaFaoliyatlarIlmiyFaoliyat extends Migration
{
    public function up()
    {
        Schema::create('raxmatilla_faoliyatlar_ilmiy_faoliyat', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->string('image');
            $table->string('slug');
            $table->text('content');
            $table->text('hujjatlar')->nullable();
            $table->boolean('active')->nullable()->default(false);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('raxmatilla_faoliyatlar_ilmiy_faoliyat');
    }
}
