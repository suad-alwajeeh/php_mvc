<?php include"footer.php";?>
<h1 class="text-white text-center bg-dark p-2 " style="color:">user administrator</h1>
<div class="container">
<div class="row ">
    <div class="col-12 text-center mt-3">
   <div class="btn-group btn-group-lg ">
       <form method="post" action="" class="mb-3">
  <a  class="btn btn-success" onclick="hide3()" >add</a>
  <button type="submit" name="deletall" class="btn btn-warning">delete all</button>
  <button type="submit" name="withrole" class="btn btn-danger">just amins</button>
  <button type="submit" name="withoutrole" class="btn btn-dark"> normal user</button>
  <a type="submit" href="user" name="reload"  class="btn btn-info">refrsh</a>
       </form>
       
</div> 
         </div>
    </div>
</div>


<div class="container" style="">

    <div class="row" id="signin" style="display:;">
    <div class="col-sm-12 col-md-3"></div>
     <div class="col-sm-12 col-md-6">
         <h3 class="text-center" >add user</h3>
         <form action="" method="post">
  <div class="form-group">
    <label for="email">name :</label>
    <input type="name" class="form-control" placeholder="" name="name">
  </div>
             <div class="form-group">
    <label for="email">email :</label>
    <input type="text" class="form-control" placeholder="" name="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" placeholder="" name="pass">
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
  <div class="form-group form-check">
            <button type="submit" name="sign" class="btn btn-primary">send</button>
            <a href="user" class="btn btn-primary">cansel</a>
             </div>
</form> 
    </div>
        <div class="col-sm-12 col-md-3"></div>
     </div>
     </div>
<script>
 function close(){
  document.getElementById("edit9").style.display='none';
 
 } 
    function hide1(){
  document.getElementById('viewone').style.display='none';
 
 }  
    function hide2(){
  document.getElementById('all').style.display='none';
 } 
       function hide3(){
  document.getElementById('signin').style.display='block';
//alert("nnnnnnnnnnnn");
 } 
    
</script>

<style>
    #signin{display:none;}

</style>
    
<?php include"footer.php";?>