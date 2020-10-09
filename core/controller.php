<?php

class controller{
public $viewobj;
public $modelobj;
public $dbobj;
public $thingobj;

function __construct(){
    $this->viewobj=new view();
    $this->modelobj=new model();
    $this->dbobj=new db_conect();
    $this->thingobj=new things();
}

}
?>