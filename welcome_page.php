 <?php
/* Displays user information and some useful messages */
session_start();
require_once 'database/functions.php';
if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['message'] = "You must log in before viewing your profile page!";    
}
//else {
    // Makes it easier to read
//   $first_name = $_SESSION['surname'];
 //   $last_name = $_SESSION['firstname'];
 //   $email = $_SESSION['email'];
  //  $active = $_SESSION['active'];
//}
?>
 <!DOCTYPE html>
<html >
    
<?php require_once 'Edit-Meun/head_start.php';?>
  <title>Welcome <?= $first_name.' '.$last_name ?></title>
<?php require_once 'Edit-Meun/head_end.php';?>
<body>
    <?php require 'Edit-meun/Meun.php'; ?>
    <p>
           <?php 
    
          // Display message about account verification link only once
          if ( isset($_SESSION['message']) )
          {
              echo $_SESSION['message'];
              
              // Don't annoy the user with more messages upon page refresh
              unset( $_SESSION['message'] );
          }
          
          ?>
    </p>
          <?php
          
          // Keep reminding the user this account is not active, until they activate
          if ( $active=0 ){
              
              '<div class="info">
              Account is unverified, please confirm your email by clicking
              on the email link!
              </div>';
          }
          
          ?>
          
          <h2><?php echo $_SESSION['firstname'] .' '.$_SESSION['surname']; ?></h2>
          <p><?= $email ?></p>
          
        

   
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="Bootstrap/js/bootstrap.min.js"></script>

</body>
</html>