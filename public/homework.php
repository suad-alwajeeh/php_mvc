<?php


/***************************
q1
قم بكتابة دالة تقوم بجمع سلسلة ارقام من نص معين كما هو مبين في الاستدعاء في الصروة المرفقة ؟ قم برفع الحل الى جيت هاب ووضع الرابط في الاسفل ؟؟؟


***************************/
function sum($num) { 
    $sum = 0; 
    for ($i = 0; $i < strlen($num); $i++){ 
        $sum += $num[$i]; 
    } 
    return $sum; 
} 
  
$num = "711"; 
echo " the number is $num";
 echo " </br>";

echo " the digit number sum  is ";

print sum($num);
echo " </br>====================================================";

/***************************
q2
اكتب كود يقوم بطباعة اكبر و اصغر غدد في مصفوفة

***************************/
$num = array(5,1,0,22,1234);
 echo " </br>";
 echo "max is";
echo(max($num));
 echo " </br>";
 echo "min is";

echo(min($num));



 echo " </br>====================================================";
/***************************
q3
اكتب كود يقوم بحذف العناصر المكررة في مصفوفة وطباعة العناصر بدون تكرار ، ثم قم برفع الحل الى جيت هاب وضع الرابط في الاسفل ؟

***************************/


$input = array("eyad", "faisal", "ahd", "suad","eyad", "faisal", "ahd", "suad");
$result = array_unique($input);
echo "العناصر الاصلية </br>";
print_r($input);
echo "</br>العناصر بعد حذف التكرار </br>";

print_r($result);
 echo " </br>";
 echo " </br>====================================================";


/***************************
q4
What is the difference between echo, print, and print_r in PHP?

The echo has a void return type
print has a return value of 1 so it can be used in expressions.
print_r is function used to display human-readable information about a variable.

***************************/
   $arr = array( "eyad", "faisal", "ahd", "suad");
   $sin="me";
   echo "</br>Values using echo... </br>";
   foreach( $arr as $value ) {
      echo "$value </br>";
   }
   echo " </br>Values using print... </br>";
   foreach( $arr as $value ) {
      print( "$value  </br>");
   }
   echo " </br> Values using print_r... </br>";
   print_r($arr);

 echo " </br>====================================================";

/**************************************************
q5
How we can run a JavaScript code from PHP? 
JavaScript is used as client side to check and verify client details 
and 
PHP is server side used to interact with database. 
In PHP, HTML is used as a string in the code. In order to render it to the browser,
we produce JavaScript code as a string in the PHP code.
***************************************************/
echo '          
<h4 id="me" style="color:red;font-size="60px""></h4> 
<script type="text/JavaScript">  
                  document.getElementById("me").innerHTML="suad abdoh hassan alwajeeh";
     </script>' 
; 

 echo " </br>====================================================";


/**************************************************
q6
Write PHP program to Given a list of items and the task is to retrieve the multiple selected value from a select box using PHP.Use multiple attribute in HTML to select multiple value from drop down list. Selecting multiple values in HTML depends on operating system and browser ?

***************************************************/
?>
<html> 
    <body> 
        <!--name.php to be called on form submission--> 
        <form method = 'post'>  
            <h4>SELECT Fruits</h4> 
            
            <select name = 'fruit[]' multiple size = 6>   
                <option value = ' banana'>banana</option> 
                <option value = 'apple'>apple</option> 
                <option value = 'pomegranate'>pomegranate</option> 
                <option value = 'mango'>mango</option> 
            </select> 
            <input type = 'submit' name = 'submit' value = Submit> 
        </form> 
    </body> 
</html> 
<?php 
      
    // Check if form is submitted successfully 
    if(isset($_POST["submit"]))  
    { 
        // Check if any option is selected 
        if(isset($_POST["fruit"]))  
        { 
            // Retrieving each selected option 
            foreach ($_POST['fruit'] as $fruit)  
                print "You Fruits $fruit<br/>"; 
        } 
    else
        echo "fruit !!"; 
    } 
 echo " </br>====================================================";

?> 
<?php
/**************************************************
q7

Write PHP program to get complete URL of currently running pages?
***************************************************/
    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
         $url = "https://";   
    else  
         $url = "http://";   
    // Append the host(domain name, ip) to the URL.   
    $url.= $_SERVER['HTTP_HOST'];   
    
    // Append the requested resource location to the URL   
    $url.= $_SERVER['REQUEST_URI'];    
      echo"<br>";

    echo $url;  
echo"<br>";

 echo " </br>====================================================";
echo"<br>";

/**************************************************
q8
Write PHP program to get complete URL of currently running pages?
***************************************************/
  // this php script is for connecting with database 
// data have to fetched from local server 
$mysql_host = 'localhost'; 
  
// user name is root 
$mysql_user = 'root'; 
  
// function to connect with database having  
// argument host and user name 
 $con=mysqli_connect($mysql_host, $mysql_user)or die('Cannot connect to database'); 
    // database name is server 
    mysqli_select_db($con,"soso")or die('Cannot connect to database'); 

// sql query to fetch all the data 
$query = "SELECT * FROM `Users`"; 
// mysql_query will execute the query to fetch data 
if ($sql = mysqli_query($con,$query)) 
{ 
    // echo "Query Executed"; 
    // loop will iterate until all data is fetched 
    while ($row = mysqli_fetch_assoc ($sql)) 
    { 
        // these four line is for four column 
        echo $row['id'].' '; 
        echo $row['first name'].' '; 
        echo $row['username'].' '; 
        echo $row['password'].'<br>'; 
    } 
} 
else
{ 
    echo "Error in execution"; 
} 
   
 
 echo " </br>====================================================";




?>   