<?php namespace Bishopm\Examening\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBishopmExameningVideos extends Migration
{
    public function up()
    {
        Schema::create('bishopm_examening_videos', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title', 255);
            $table->string('url', 255);
            $table->date('published_at');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('bishopm_examening_videos');
    }
}
