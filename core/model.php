<?php 
class model{
function createmodel($modeln){
require_once('app/model/'.$modeln.'model.php');
$requestmodel=$modeln.'model';
return new $requestmodel();
}


}

?>