<?php namespace Bishopm\Examening\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBishopmExameningVideos extends Migration
{
    public function up()
    {
        Schema::table('bishopm_examening_videos', function($table)
        {
            $table->renameColumn('url', 'youtube_id');
        });
    }
    
    public function down()
    {
        Schema::table('bishopm_examening_videos', function($table)
        {
            $table->renameColumn('youtube_id', 'url');
        });
    }
}
