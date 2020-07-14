<?php namespace Bishopm\Examening\Components;

use Cms\Classes\ComponentBase;
use Bishopm\Examening\Models\Comment;

class Recentcomments extends ComponentBase 
{
    public function componentDetails(){
        return [
            'name' => 'Recent comments',
            'description' => 'list of recent comments'
        ];
    }
    
    public function defineProperties(){
        return [
            'numberofcomments' => [
                'title' => 'Number of comments',
                'description' => 'Number of recent comments'
            ]
        ];
    }

    public function onRun(){
        $this->recentcomments = Comment::with('user')->orderBy('published_at','DESC')->get()->take($this->property('numberofcomments'));
    }
    
    public $recentcomments;

}