<?php namespace Bishopm\Examening\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBishopmExameningArticles extends Migration
{
    public function up()
    {
        Schema::create('bishopm_examening_articles', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title', 255);
            $table->text('body')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('bishopm_examening_articles');
    }
}
