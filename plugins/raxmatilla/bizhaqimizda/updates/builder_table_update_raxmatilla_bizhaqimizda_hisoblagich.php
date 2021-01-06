<?php namespace Raxmatilla\BizHaqimizda\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxmatillaBizhaqimizdaHisoblagich extends Migration
{
    public function up()
    {
        Schema::table('raxmatilla_bizhaqimizda_hisoblagich', function($table)
        {
            $table->text('hisoblagich')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('raxmatilla_bizhaqimizda_hisoblagich', function($table)
        {
            $table->string('hisoblagich', 191)->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
