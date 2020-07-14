<?php namespace Bishopm\Examening\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBishopmExameningComments extends Migration
{
    public function up()
    {
        Schema::create('bishopm_examening_comments', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('user_id');
            $table->timestamp('published_at');
            $table->text('comment');
            $table->string('entity_type', 255);
            $table->integer('entity_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('bishopm_examening_comments');
    }
}
