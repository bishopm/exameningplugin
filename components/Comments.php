<?php namespace Bishopm\Examening\Components;

use Cms\Classes\ComponentBase;
use Input;
use Validator;
use Redirect;
use Auth;
use Bishopm\Examening\Models\Comment;

class Comments extends ComponentBase 
{
    public function componentDetails(){
        return [
            'name' => 'Comments',
            'description' => 'User comments on content'
        ];
    }
    
    public function defineProperties(){
        return [
            'contenttype' => [
                'title' => 'Content type',
                'description' => 'Choose from blog, video, resource or article',
                'type' => 'dropdown',
                'options' => ['article'=>'Article', 'blog'=>'Blog', 'resource'=>'Resource', 'video'=>'Video']
            ]
        ];
    }

    public function onRun(){
        $this->entity_type = $this->property('contenttype');
        if ($this->entity_type=='blog'){
            $this->entity_id = $this->page->components['blogPost']->post->id;
        } else {
            $this->entity_id = $this->page->components['builderDetails']->record->id;
        }
        $this->comments = $this->loadComments(); 
    }
    
    public function onSave(){
        $comment = new Comment();
        $comment->comment = post('comment');
        $comment->entity_id = post('entity_id');
        $comment->entity_type = $this->property('contenttype');
        $comment->user_id = post('user');
        $comment->save();
        $this->page['comments'] = Comment::with('user')->where('entity_type',$this->property('contenttype'))
        ->where('entity_id',post('entity_id'))->get(); 
    }
    
    protected function loadComments(){
        return Comment::with('user')->where('entity_type',$this->entity_type)
        ->where('entity_id',$this->entity_id)->get();
    }

    public function onLogout(){
        $user = Auth::getUser();
        Auth::logout();
        return Redirect('/');
    }
    
    public $comments;

    public $entity_id;

    public $entity_type;

}