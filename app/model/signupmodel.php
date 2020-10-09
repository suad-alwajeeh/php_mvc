<?php
class signupmodel extends db_conect{
   function __construct(){
   
   }
  function add_user(){
       if(isset($_POST['sign'])){
              $name=$_POST['name'];
              $email=$_POST['email']; 
              $pass=$_POST['pass']; 
			$SQL = "INSERT INTO `mvc_user`(`use_name`, `user_email`, `user_password`, `user_active`, `user_roles`) VALUES ('$name','$email','$pass',0,0)";
			$result = $this->connect()->prepare($SQL);
        if($result->execute()){
                 
            echo'<div class="col-12 text-center alert-success">successfully signup... if you want login <a href="home">login</a></div>';  
            }else{
            echo "can not add row";
        }
     }else{
      // echo "nothing";
       }
  }

}
?>