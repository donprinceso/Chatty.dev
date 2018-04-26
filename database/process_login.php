<?php


require 'database/db.php';
require 'database/functions.php';
// initializing variables
$errors=array();

//get the database connect
$con=  mysqli_connect($host, $user, $pass, $db);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') 
        {
             if (isset($_POST['login'])) { //user logging in
        $email = mysqli_real_escape_string($con,$_POST['email']);
        $password = mysqli_real_escape_string($con,$_POST['password']);
        
        if (empty($email)) {
  	array_push($errors, "Email is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }
  
    $query="SELECT * FROM register WHERE email='$email' AND password = '$password'";
    $result= mysqli_query($con,$query);
    
    if ( mysqli_num_rows($result) > 0 ){
        
        while ($row = mysqli_fetch_assoc($result)){
            
            $email = $row['email'];
            $pass = $row['password'];
            
            // check if user exists
            
            if ($_REQUEST['email'] == $row['email'] ){
                
                array_push($errors,"User already exists !!");
                
            }
        }
        
    }
    
    else {
      array_push($errors,"You have entered wrong password, try again!");
       
    }
}

        
                 }
     
