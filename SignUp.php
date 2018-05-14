<?php
   
require 'database/register.php';
    
include 'Template.php';
?>

<form method="post" action="SignUp.php" role="form" id="form">
    <!--Display the Validation errors here-->
    <?php  include 'Validation/errors.php';?>
    
    <div class="form-group">
        <input type="text" name="surname" class="form-control" placeholder="Surname" required autofocus/>
    </div> 
    <div class="form-group ">
        <input type="text" name="firstname" class="form-control" placeholder="First name" required/>
    </div> 
    <div class="form-group ">
        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required/>
    </div> 
    <div class="form-group">
        <input type="password" class="form-control" name="password_1" placeholder="Password" required/>
    </div>
     <div class="form-group">
        <input type="password" class="form-control" name="password_2" placeholder="Confirm Password" required/>
    </div> 
    <div class="form-group">
        <button type="submit" class="btn btn-default btn-block" name="SignUp">
                            Sign Up
                        </button>
        <p>Already A Member? <a href="Login.php" class="w3-btn-block w3-button btn-default btn">LogIn</a></p>
    </div> 
</form>