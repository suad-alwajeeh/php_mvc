<?php
 class route{
    function __construct($url){
      $clean_url=rtrim($url,'/');
      $clean_url=explode('/',$clean_url);
      $controller=$clean_url[0].'control';
      include ("app/controller/".$controller.".php");
      new $controller;
    }
 }
?>