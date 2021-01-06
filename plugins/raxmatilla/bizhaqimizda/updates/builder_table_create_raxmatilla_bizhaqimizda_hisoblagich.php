<?php namespace Raxmatilla\BizHaqimizda\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRaxmatillaBizhaqimizdaHisoblagich extends Migration
{
    public function up()
    {
        Schema::create('raxmatilla_bizhaqimizda_hisoblagich', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('hisoblagich');
            $table->string('orqa_fon');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('raxmatilla_bizhaqimizda_hisoblagich');
    }
}
