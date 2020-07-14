<?php namespace Bishopm\Examening\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBishopmExameningArticles extends Migration
{
    public function up()
    {
        Schema::table('bishopm_examening_articles', function($table)
        {
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->text('body')->default('null')->change();
        });
    }
    
    public function down()
    {
        Schema::table('bishopm_examening_articles', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->text('body')->default('NULL')->change();
        });
    }
}
