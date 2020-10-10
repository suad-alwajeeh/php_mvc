<?php

class buildercontrol extends controller{
    public $controller;
function __construct(){
     $this->controller=new controller();
     $this->controller->thingobj->head();
     $model=$this->controller->modelobj->createmodel('builder');
     $this->controller->viewobj->createview('builder',$d="");
    $model->getall();
    $model->get_one_with_condation();
    $model->select_orderby();
    $model->select_orderbymore();
    $model->select_limit();
    $model->select_group();
    $model->select_joininner();
    $model->select_joinleft();
    $model->select_joinRIGHT();
     $this->controller->thingobj->foot();
    }

}

?>