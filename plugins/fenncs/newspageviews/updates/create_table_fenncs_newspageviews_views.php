<?php namespace FennCS\NewsPageViews\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateFenncsNewspageviewsViews extends Migration
{
    public function up()
    {
        Schema::create('fenncs_newspageviews_views', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('post_id')->unsigned();
            $table->integer('views');
            $table->primary(['post_id']);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('fenncs_newspageviews_views');
    }
}
