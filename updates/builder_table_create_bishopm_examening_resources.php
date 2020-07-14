<?php namespace Bishopm\Examening\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBishopmExameningResources extends Migration
{
    public function up()
    {
        Schema::create('bishopm_examening_resources', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('url', 255);
            $table->string('title')->nullable();
            $table->text('description');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('bishopm_examening_resources');
    }
}
