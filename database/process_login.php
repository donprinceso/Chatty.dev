<?php


require 'database/db.php';
require 'database/functions.php';
// initializing variables
$errors=array();

//get the database connect
$con = mysqli_connect(dbserver,dbuser,dbpassword,dbname);

             if (isset($_POST['login'])) { //user logging in
        $email = mysqli_real_escape_string($con,$_POST['email']);
        $password = mysqli_real_escape_string($con,$_POST['password']);
        
        if (empty($email)) {
  	array_push($errors, "Email is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }
   if(strlen($password_1) < 6){			
	 array_push($errors,"Password should not be less than 6 characters");
    }
  if(count($errors)==0){
    $sql="SELECT email,password_1 FROM user WHERE email = '$email' and password ='$password_1'";
    $result= mysqli_query($con, $sql);
    $count= mysqli_num_rows($result);
   if($count==1){
     // $user_check_mail= mysqli_insert_id($con);
      $_SESSION['email']= getUserEmail($email);
    header("location: welcome_page.php");
   }    
    }
    
    else {
      array_push($errors,"<b>Login Failed:</b>You have entered wrong email and password, try again!");
       
    }
}

        
                 
     
