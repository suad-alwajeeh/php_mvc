<?php

class signupcontrol extends controller{
    public $controller;
function __construct(){
     $this->controller=new controller();
     $this->controller->thingobj->head();
     $model=$this->controller->modelobj->createmodel('signup');
     $this->controller->viewobj->createview('signup',$d="");
    $model->add_user();
     $this->controller->thingobj->foot();


    }

}

?>