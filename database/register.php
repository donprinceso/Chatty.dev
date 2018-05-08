<?php



require 'database/db.php';
require 'database/functions.php';
// initializing variables
$errors=array();

//get the database connect
$con = mysqli_connect(dbserver,dbuser,dbpassword,dbname);

    if (isset($_POST['SignUp'])) { //user registration
    $surname = mysqli_real_escape_string($con,$_POST['surname']);
    $firstname = mysqli_real_escape_string($con,$_POST['firstname']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $password_1 = mysqli_real_escape_string($con,$_POST['password_1']);
    $password_2 = mysqli_real_escape_string($con,$_POST['password_2']);
   // $hash = mysqli_real_escape_string( md5( rand(0,1000) ) );
    
    
    // To ensure that all form fields are properly filled:
    if(empty($surname)){
        array_push($errors,"surname is required");
    }
    if(empty($firstname)){
        array_push($errors,"First name is required");
    }
    if(empty($email)){
        array_push($errors,"Email is required");
    }
    if($password_1 !== $password_2){
        array_push($errors,"Password is required");
    }
    if(strlen($password_1) < 6){			
	 array_push($errors,"Password should not be less than 6 characters");
    }
 // Check if user with that email already exists
    $mail_query ="SELECT * FROM register WHERE email='$email'";
    $mail_result = mysqli_query($con,$mail_query);
// We know user email exists if the rows returned are more than 0
if (mysqli_num_rows($mail_result) > 0 ){
                 array_push($errors,"Email address already exists");
		}
else { // Email doesn't already exist in a database, proceed...
$password=  md5($password);
    // active is 0 by DEFAULT (no need to include it here)
    $sql = "INSERT INTO register (surname,firstname,email,password_1,password_2) " 
            . "VALUES ('$surname','$firstname','$email','$password_1','$password_2')";
           $res= mysqli_query($con,$sql);
    // Add user to the database
    if ($res ){

        $_SESSION['active'] = 0; //0 until user activates their account with verify.php
        $_SESSION['logged_in'] = true; // So we know the user has logged in
        
         $_SESSION['message'] =
                "<h3 class='purple-text text-darken-4 center'> Hey,.'$surname'..'$firstname'.</h3>
                   <h4> Your account was successfully created! </h4>
                 Confirmation link has been sent to <strong>.'$email'.</strong>, please verify
                 your account by clicking on the link in the message!";
         
        // Send registration confirmation link (verify.php)
        $to = "$email";
			$headers = "MIME-VERSION:1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			$headers .= "From: $email";
			$headers .= "Cc: donprince4life44@gmail.com";
			$subject = "Account Verification ( Chatty.Dev)";
			$message_body = 'Hello '.$firstname.''.$surname.',

        Thank you for signing up!

        Please click this link to activate your account:

        http://localhost/PhpProject1/verify.php?email='.$email.'';  

			$mail = mail($to,$subject,$message_body,$headers);
                        
        header("location:success.php"); 

    }
 else {
        array_push($errors,"Registration failed");
    }
   
 }
}

