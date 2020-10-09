<?php
class homemodel extends db_conect{
   function __construct(){
   
   }
function login(){
          if(isset($_POST['LOGIN'])){
              $name=$_POST['name'];
              $pass=$_POST['pass'];              
			$SQL = "SELECT * FROM mvc_user where use_name='$name' and user_password='$pass'";
			$result = $this->connect()->prepare($SQL);
			$result->execute();
          $count= $result->rowcount();
        if($count>=1){
            echo"login success";
            header('location:user');
           exit();
            
	}elseif($count==0){
            echo'<div class="col-12 text-center alert-danger">sure if password or name correct</div>';  
           
	}}else{
         // echo"nothing";
          }
      }
    
    
     function forgit_pass(){
          if(isset($_POST['forget'])){
         $email=$_POST['uemail'];

			$SQL = "SELECT * FROM mvc_user where user_email='$email'";
			$result = $this->connect()->prepare($SQL);
			$result->execute();
          $count= $result->rowcount();
        if($count>=1){
            echo "yyyyyyyyyyyyyyy";
              $success1='<div class="alert alert-success" style="text-align:center;">"check your email to change passsword"</div>';
                echo $success1;	
        // $head='to '.$email;
          //$message='localhost/mvc/new_pass لاعادة تعيين كلمة المرور ادخل على الرابط ';
           // mail($email,'اعادة تعيين كلمة المرور',$message,$head);
              
        }elseif($count==0){
                $success='<div class="alert alert-danger" style="text-align:center;">"email not found"</div>';
                echo $success;	}
      }
     }
}
?>