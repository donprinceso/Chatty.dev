<?Php

 
  //include ('database/db.php');  
require 'database/process_login.php';
include 'Template.php';
?>
<form method="post" action="Login.php" role="form" id="form">
    <!--Display the Validation errors here-->
    <?php  include 'Validation/errors.php';?>
    
    <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control" id="email" name="email"autocomplete autofocus required/>
    </div> 
    <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" id="pwd" name="password_1" required/>
    </div>  
   <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
    <button type="submit" class="btn btn-default" id="submit" name="login_btn">Submit</button>
  <p>Not Yet A Member? <a href="SignUp.php">Sign Up</a></p>
   
</form>
