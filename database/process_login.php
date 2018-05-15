<?php
session_start();
// connecting the datbase
//require_once'database/db.php';
include 'database/functions.php';
$con = mysqli_connect(dbserver,dbuser,dbpassword,dbname);

if (!$con){
    die("connection failed:".mysqli_connect_errno());
    }
    
    $errors=array();
 //  if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST["login_btn"])){
        $email= mysqli_real_escape_string($con,$_POST['email']);
        $password_1=mysqli_real_escape_string($con,$_POST['password_1']);
    
    if(empty($email)){
        array_push($errors,'<b>Login Failed:</b>Invalid Email Address');
    }
    if(empty($password_1)){
        array_push($errors,'<b>Login Failed:</b>Invalid Password');
    }
     if(strlen($password_1) < 6){			
	 array_push($errors,"Password should not be less than 6 characters");
    }
    if(count($errors)==0){
    $sql="SELECT email,password_1 FROM userdb WHERE email = '$email' and password ='$password_1'";
    $result= mysqli_query($con, $sql);
   if(mysqli_num_rows($result)==1) 
   {
     // $user_check_mail= mysqli_insert_id($con);
      $_SESSION['email']= getUserEmail($email);
      //set session variables
      
    header("location:welcome_page.php");
   }
    }
    
 else {
      array_push($errors,'<b>Login Failed:</b>Wrong Email And Password');  
 }
}
   
   