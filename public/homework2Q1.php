<?php
/*************************************************
==================================================
conect to db
==================================================
*************************************************/
$dsn='mysql:host=localhost;dbname=soso';
$user='root';
$pass='';
$option=array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8',);
try
{
	$con=new PDO($dsn,$user,$pass,$option);
	$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
	echo 'failed connection '.$e->getmessage();
}


/*************************************************
==================================================
select all  items from table
==================================================
*************************************************/

$query="SELECT * FROM `user` ORDER BY id DESC ";
$h_display_item=$con->prepare($query);
    $h_display_item->execute();
    $h_empty= $h_display_item->rowcount();
 while($row=$h_display_item->fetch()) :

           echo $row['name']."</br>";
endwhile;

/*************************************************
==================================================
select one  item from table
==================================================
*************************************************/

$query="SELECT * FROM `user` where id =10 ";
$h_display_item=$con->prepare($query);
    $h_display_item->execute();
    $h_empty= $h_display_item->rowcount();
if($h_empty==1){
 while($row=$h_display_item->fetch()) :

           echo $row['name']."</br>";
endwhile;
}else{
echo "noo one </br>";
}
/*************************************************
==================================================
delete one  item from table
==================================================
*************************************************/

$query="delete  FROM `user` where id =1 ";
$h_display_item=$con->prepare($query);
   if( $h_display_item->execute()){
   
echo "delete  one </br>";

                  }
/*************************************************
==================================================
insert one  item to table
==================================================
*************************************************/

$query="INSERT INTO `user`( `name`, `password`, `department`) VALUES ('maria','mmm','cs')";
$h_display_item=$con->prepare($query);
   if( $h_display_item->execute()){
   
echo "added  one </br>";

                  }
/*************************************************
==================================================
update one  item to table
==================================================
*************************************************/

$query="UPDATE `user` SET`name`='soso',`password`='no',`department`='is' WHERE id=2";
$h_display_item=$con->prepare($query);
   if( $h_display_item->execute()){
   
echo "update  one row</br>";

                  }
?>