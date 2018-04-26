<?php
session_start(); 
   
require 'database/register.php';
    
include 'Template.php';
?>

<form method="post" action="SignUp.php" role="form" id="form">
    <!--Display the Validation errors here-->
    <?php  include 'Validation/errors.php';?>
    
    <div class="form-group">
        <input type="text" name="surname" class="form-control" placeholder="Surname"/>
    </div> 
    <div class="form-group ">
        <input type="text" name="firstname" class="form-control" placeholder="First name"/>
    </div> 
    <div class="form-group ">
        <input type="email" class="form-control" id="email" name="email" placeholder="Email"/>
    </div> 
    <div class="form-group">
        <input type="password" class="form-control" name="password" placeholder="Password"/>
    </div>  
    <div class="form-group">
        <button type="submit" class="btn btn-default btn-block" name="SignUp">
                            Sign Up
                        </button>
        <p>Already A Member? <a href="Login.php">LogIn</a></p>
    </div> 
</form>