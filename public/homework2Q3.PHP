


<?php
/**************
$$_SESSION
**************/
session_start();
//$_SESSION['count']=3;
if(!isset($_SESSION['count'])){
    $_SESSION['count'] = 1;
}else{
    $_SESSION['count']++;
   session_abort();
}
echo $_SESSION['count'];
//$_SESSION['count'] will always be 1;
//This will always echo 1 not the above code.

$a = session_id();
echo "</br>".$a;


?>
<html>
<body>
    
</body>
</html>