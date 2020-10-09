<?php

class usermodel extends db_conect{
   function __construct(){
   
   }
     
     function view_users(){
			$SQL = "SELECT * FROM mvc_user";
			$result = $this->connect()->prepare($SQL);
			$result->execute();
          $count= $result->rowcount();
        if($count>0){
                        echo'<div class="container" id="all"><div class="row"><div class="col-12 text-left"><h1>all users</h1></div>';
                 while($row=$result->fetch()) :?>
<div class="col-md-3 col-sm-12 alert alert-dark m-1 text-center card">
             <h5>ID:<?php echo $row['user_id'] ;?></h5>
            <h5>NAME:<?php echo $row['use_name'] ;?></h5>
            <h5>EMAIL:<?php echo $row['user_email'] ;?></h5>
    <div class="btn-group btn-group-lg ">
       
        <form action="" method="post">
            <input type="text" name="usid" value="<?php echo $row['user_id'] ;?> " hidden="hidden">
  <button type="submit" name="edituser" class="btn btn-success">edit</button>
  <button type="submit" name="deleteuser" class="btn btn-warning">delete</button>
  <button type="submit" name="viewuser" onclick="hide2()"  class="btn btn-info">view</button>
        </form>
</div> 
        </div>  <?php  endwhile;
            echo'</div></div>';
            
	}
     }
    
     function view_users_with_role(){
       if(isset($_POST['withrole'])){
			$SQL = "SELECT * FROM mvc_user where user_roles=1";
			$result = $this->connect()->prepare($SQL);
			$result->execute();
          $count= $result->rowcount();
        if($count>0){
                        echo'<div class="container" id="all"><div class="row"><div class="col-12 text-left"><h1>users have role</h1></div>';
                 while($row=$result->fetch()) :?>
<div class="col-md-3 col-sm-12 alert alert-dark m-1 text-center card">
             <h5>ID:<?php echo $row['user_id'] ;?></h5>
            <h5>NAME:<?php echo $row['use_name'] ;?></h5>
            <h5>EMAIL:<?php echo $row['user_email'] ;?></h5>
    <div class="btn-group btn-group-lg ">
        <form action="" method="post">
            <input type="text" name="usid" value="<?php echo $row['user_id'] ;?> " hidden="hidden">
  <button type="submit" name="edituser" class="btn btn-success">edit</button>
  <button type="submit" name="deleteuser" class="btn btn-warning">delete</button>
  <button type="submit" name="viewuser" onclick="hide2()"  class="btn btn-info">view</button>
        </form>
</div> 
        </div>  <?php  endwhile;
            echo'</div></div>';
            
	}
     }
     }
    function view_users_without_role(){
       if(isset($_POST['withoutrole'])){
			$SQL = "SELECT * FROM mvc_user where user_roles=0";
			$result = $this->connect()->prepare($SQL);
			$result->execute();
          $count= $result->rowcount();
        if($count>0){
                        echo'<div class="container" id="all"><div class="row"><div class="col-12 text-left"><h1>users not have role</h1></div>';
                 while($row=$result->fetch()) :?>
<div class="col-md-3 col-sm-12 alert alert-dark m-1 text-center card">
             <h5>ID:<?php echo $row['user_id'] ;?></h5>
            <h5>NAME:<?php echo $row['use_name'] ;?></h5>
            <h5>EMAIL:<?php echo $row['user_email'] ;?></h5>
    <div class="btn-group btn-group-lg ">
        <form action="" method="post">
            <input type="text" name="usid" value="<?php echo $row['user_id'] ;?> " hidden="hidden">
  <button type="submit" name="edituser" class="btn btn-success">edit</button>
  <button type="submit" name="deleteuser" class="btn btn-warning">delete</button>
  <button type="submit" name="viewuser" onclick="hide2()"  class="btn btn-info">view</button>
        </form>
</div> 
        </div>  <?php  endwhile;
            echo'</div></div>';
            
	}
     }
     }
    function view_one_user(){
        
       if(isset($_POST['viewuser'])){
              $id=$_POST['usid'];
			$SQL = "SELECT * FROM mvc_user where user_id=$id";
			$result = $this->connect()->prepare($SQL);
			$result->execute();
          $count= $result->rowcount();
        if($count==1){
            echo'<div class="container" id="viewone"><div class="row">';
                 while($row=$result->fetch()) :?>
<div class="col-sm-12   alert alert-dark  text-center">
             <h5>ID:<?php echo $row['user_id'] ;?></h5>
            <h5>NAME:<?php echo $row['use_name'] ;?></h5>
            <h5>EMAIL:<?php echo $row['user_email'] ;?></h5>
            <h5>PASSWORD:<?php echo $row['user_password'] ;?></h5>
             <h5>ROLE:<?php echo $this->role_user($row['user_roles']) ;?></h5>
            <h5>STATUS:<?php echo  $this->status_user($row['user_active']) ;?></h5>
    <div class="btn-group btn-group-lg ">
  <button type="submit" name="add" onclick="hide1()" class="btn btn-success">close</button>
</div> 
        </div> 
    </div></div><?php  endwhile;
            echo'</div></div>';
	}else{
            echo "notfound";
        }
       }
     }
     function delete_one_user(){
       if(isset($_POST['deleteuser'])){
              $id=$_POST['usid'];
			$SQL = "SELECT * FROM mvc_user where user_id=$id";
			$result = $this->connect()->prepare($SQL);
			$result->execute();
          $count= $result->rowcount();
        if($count==1){
                 $SQL = "delete FROM mvc_user where user_id=$id";
			$result = $this->connect()->prepare($SQL);
			if($result->execute()){
            echo'<div class="container" id="viewone"><div class="row"><div class="col-12 alert-success">';
            echo "delete user with id : $id";
            echo'</div></div>';

            }
	}else{
             echo'<div class="container" id="viewone"><div class="row"><div class="col-12 alert-success">';
            echo "not found user with id : $id";
                        echo'</div></div>';
        }
       }else{}
     }
    function delete_all(){
       if(isset($_POST['deletall'])){
			$SQL = "SELECT * FROM mvc_user ";
			$result = $this->connect()->prepare($SQL);
			$result->execute();
          $count= $result->rowcount();
        if($count >=1){
                 $SQL = "delete  FROM mvc_user ";
			$result = $this->connect()->prepare($SQL);
			if($result->execute()){
            echo'<div class="container" id="viewone"><div class="row"><div class="col-12 alert-success">';
            echo "delete all rows";
            echo'</div></div>';

            }
	}else{
 echo'<div class="container" id="viewone"><div class="row"><div class="col-12 alert-success">';
            echo "not found";
            echo'</div></div>';
        }
     }else{
       
       }
    }
     function add_user(){
          if(isset($_POST['sign'])){
              $name=$_POST['name'];
              $email=$_POST['email'];
              $pass=$_POST['pass'];
              $active=$_POST['status0'];
              $role=$_POST['role'];
			$SQL = "INSERT INTO `mvc_user`(`use_name`, `user_email`, `user_password`, `user_active`, `user_roles`) VALUES ('$name','$email','$pass',$active,$role)";
			$result = $this->connect()->prepare($SQL);
        if($result->execute()){
                 
            echo "added one row";
            }else{
            echo "can not add row";
        }
     }
     }
    function editform(){
     if(isset($_POST['edituser'])){
       $id=$_POST['usid'];
			$SQL = "SELECT * FROM mvc_user where user_id=$id";
			$result = $this->connect()->prepare($SQL);
			$result->execute();
          $count= $result->rowcount();
        if($count==1){
                
            echo'<div class="container" id="viewone"><div class="row"><div class="col-12 alert-success">';
            echo "<h2>edit data of user with id : $id</h2>";
                  while($row=$result->fetch()) :?>
         <form action="" method="post">
            <input type="text" name="ussid" class="form-control" value="<?php echo $row['user_id'] ;?> " hidden="hidden" >
                <div class="form-group">
  <label for="sel1">name</label>
            <input type="text" name="name" class="form-control" value="<?php echo $row['use_name'] ;?> " >
             </div>
              <div class="form-group">
  <label for="sel1">email</label>
            <input type="text" class="form-control" name="email" value="<?php echo $row['user_email'] ;?> " >
             </div>
                 <div class="form-group">
  <label for="sel1">role</label>
  <select name="role" class="form-control" id="">
    <option value="1">admin</option>
    <option value="0">normal user</option>
  </select>
</div>
                      <div class="form-group">
  <label for="sel1">status</label>
  <select name="status0" class="form-control" id="">
    <option value="1">active</option>
    <option value="0">no active </option>
  </select>
</div>
  <button type="submit" name="edituser8" class="btn btn-success">edit</button>
  <button type="submit"  class="btn btn-danger">close</button>
        </form>  <?php  endwhile;
            echo'</div></div>';

            }
	else{
             echo'<div class="container" id="viewone"><div class="row"><div class="col-12 alert-success">';
            echo "not found user with id : $id";
                        echo'</div></div>';
        }
       }else{}
    
    }
    function edit_user(){
          if(isset($_POST['edituser8'])){
              
              $id=$_POST['ussid'];
              $name=$_POST['name'];
              $email=$_POST['email'];
              $active=$_POST['status0'];
              $role=$_POST['role'];
			$SQL = "UPDATE `mvc_user` SET `use_name`='$name', `user_email`='$email', `user_active`=$active, `user_roles`=$role where user_id=$id";
			$result = $this->connect()->prepare($SQL);
        if($result->execute()){
                 
            echo "edit one row";
            }else{
            echo "can not edit row";
        }
     }
    }
    
	private function role_user($satarus){
		if ($satarus==1){
        echo"admin";
        }elseif ($satarus==0){
        echo"nurmal user";
        }
            
	}
    private function status_user($satarus){
		if ($satarus==1){
        echo"active";
        }elseif ($satarus==0){
        echo"no-active ";
        }
            
	}

}
?>