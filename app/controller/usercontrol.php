<?php

class usercontrol extends controller{
    public $controller;

function __construct(){
     $this->controller=new controller();
     $this->controller->thingobj->head();
     $this->controller->dbobj->connect();
     $model=$this->controller->modelobj->createmodel('user');
     $this->controller->viewobj->createview('user',$d="");
      $model->editform();
    $model->view_users_with_role();
     $model->view_users_without_role();
         $model->delete_all();
     $model->view_one_user();
     $model->add_user();
     $model->delete_one_user();
    $model->edit_user();
     $model->view_users();
     $this->controller->thingobj->foot();
    }
    
   
}

?>