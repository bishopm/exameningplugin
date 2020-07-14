<?php namespace Bishopm\Examening;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Bishopm\Examening\Components\Comments' => 'comments',
            'Bishopm\Examening\Components\Recentcomments' => 'recentcomments'
        ];
    }

    public function registerSettings()
    {
    }
}
