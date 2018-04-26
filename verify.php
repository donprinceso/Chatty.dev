<?php 
/* Verifies registered user email, the link to this page
   is included in the register.php email message 
*/
require 'database/db.php';
session_start();
$con=  mysqli_connect($host, $user, $pass, $db);
// Make sure email and hash variables aren't empty
if(isset($_GET['email']) && !empty($_GET['email']))
{
    $email = mysqli_real_escape_string($con,$_GET['email']); 
    
    
    // Select user with matching email, who hasn't verified their account yet (active = 0)
     $query ="SELECT * FROM register WHERE email='$email' AND active='0'";
     $result=  mysqli_query($con, $query);
    if ( mysqli_num_rows($result) == 0 )
    { 
        $_SESSION['message'] = "Account has already been activated or the URL is invalid!";

     
    }
    else {
        $_SESSION['message'] = "Your account has been activated!";
        
        // Set the user status to active (active = 1)
        $query="UPDATE users SET active='1' WHERE email='$email'";
        $result=  mysqli_query($con, $query);
        $_SESSION['active'] = 1;
        
        header("location: Login.php");
    }
}
else {
    $_SESSION['message'] = "Invalid parameters provided for account verification!";
   
}     
?>