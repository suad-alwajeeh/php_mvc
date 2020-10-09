<?php

class homecontrol extends controller{
    public $controller;
function __construct(){
     $this->controller=new controller();
     $this->controller->thingobj->head();
     $this->controller->dbobj->connect();
            $model=$this->controller->modelobj->createmodel('home');
     $this->controller->viewobj->createview('home',$d="");
            $model->login();
            $model->forgit_pass();
     $this->controller->thingobj->foot();

    }

}

?>