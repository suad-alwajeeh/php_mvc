<?php
include_once 'core/route.php';
include_once 'core/controller.php';
include_once 'core/view.php';
include_once 'core/model.php';
include_once 'core/db_con.php';
include_once 'core/config.php';
$url=isset($_GET['url'])?$_GET['url']:'home';
 new route($url);
?>