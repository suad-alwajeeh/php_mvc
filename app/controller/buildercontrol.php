<?php

class buildercontrol extends controller{
    public $controller;
function __construct(){
     $this->controller=new controller();
     $this->controller->thingobj->head();
     $model=$this->controller->modelobj->createmodel('builder');
     $this->controller->viewobj->createview('builder',$d="");
     $this->controller->thingobj->foot();
    }

}

?>