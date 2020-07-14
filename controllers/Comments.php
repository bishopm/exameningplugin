<?php namespace Bishopm\Examening\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Comments extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\ReorderController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Bishopm.Examening', 'examening-menu', 'comment-menu-item');
    }
}
