


<?php
/**************
$$_SESSION
**************/
session_start();
$_SESSION["user"]="suad";
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Echo session variables that were set on previous page
echo "NAME IS " . $_SESSION["user"] . ".<br>";
?>

</body>
</html>

</body>
</html>

<?php
/**************
$GLOBALS
**************/
 $x = "</br>HELLO";
  $GLOBALS['z'] = $x ;
function read() {
   echo $GLOBALS['z'];
}

read();
/**************
$_SERVER
**************/
echo "<br>";
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";


/**************
$_REQUEST
**************/
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_REQUEST['fname'];
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
}

/**************
$_POST
**************/
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_POST['name'];
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
}

/**************
$_GET
**************/
echo "</br>Study " . $_GET['subject'] . " at " . $_GET['web'];
/**************
$_ENV
**************/

$_ENV["MYENV"]=$_SERVER['PHP_SELF'];
$new_variable_var = $_ENV["MYENV"];
echo "</br>".$new_variable_var;
?>
<html>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="name">
  <input type="submit" name="m" value="ok">
</form>
    
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<a href="homework2Q2.php?subject=PHP&web=BOOTSTRAP">Test $GET</a>
<?php
/**************
$_COOKIE
**************/
$cookie_name = "SUAD";
$cookie_value = "MEMI ";
//setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>


<?php
if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  echo "Cookie '" . $cookie_name . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$cookie_name];
}
?>
    </body>
</html>

