<div class="container">
	<div class="row">
		<div class="col-md-12">
<h1 class="text-center" >hello world</h1>
</div></div></div>


<div class="container" style="display:">
<div class="row" id="login">
    <div class="col-sm-12 col-md-3"></div>
    <div class="col-sm-12 col-md-6">

         <form action="" method="post" id="form1">
                     <h1 class="text-center" >login </h1>

  <div class="form-group">
    <label for="email">name :</label>
    <input type="name" class="form-control"  name="name">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control"  name="pass">
  </div>
  <div class="form-group form-check">
            <button type="submit" name="LOGIN" class="btn btn-primary">login</button>
            <a onclick="hide()" class="text-danger btn btn-light">forget password</a>
            <a href="signup" class="text-info btn btn-light">register in system </a>
             </div>
        </form>
             
              <form action="" method="post" id="form2">
                          <h1 class="text-center" >enter email to reset your pass </h1>

  <div class="form-group">
    <label for="email">email :</label>
    <input type="text" class="form-control"  name="uemail">
  </div>
  <div class="form-group form-check">
            <button type="submit" name="forget" class="btn btn-primary">send</button>
            <a onclick="hide1()" class="text-danger btn btn-light">cansel </a>
             </div>
</form> 
    </div>
        <div class="col-sm-12 col-md-3"></div>
    </div>
     </div>
<style>
    #form2{display:none;}
</style>
<script>
    
    function hide(){
    document.getElementById('form1').style.display='none';
    document.getElementById('form2').style.display='block';
    
    }
     function hide1(){
    document.getElementById('form2').style.display='none';
    document.getElementById('form1').style.display='block';
    
    }
</script>

