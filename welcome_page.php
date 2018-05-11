 <?php
/* Displays user information and some useful messages */
session_start();
require_once 'database/functions.php';
?>
 <!DOCTYPE html>
<html >
    
<?php require_once 'Edit-Meun/head_start.php';?>
    <title>Welcome</title>
<?php require_once 'Edit-Meun/head_end.php';?>
<body>
    <?php require 'Edit-meun/Meun.php'; ?>
    <div class="w3-container">
        <div class="w3-card-2 w3-border">
           <?php 
          // Display message about account verification link only once
          if ( isset($_SESSION['message']) )
          {
              echo $_SESSION['message'];             
              // Don't annoy the user with more messages upon page refresh
              unset( $_SESSION['message'] );
          }  ?>
    </div>
</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="Bootstrap/js/bootstrap.min.js"></script>

</body>
</html>