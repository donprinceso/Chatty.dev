<?php

session_start();

?>
<!DOCTYPE html>
<html>
<?php require_once 'Edit-Meun/head_start.php';
 require_once 'database/functions.php';
?>
  <title><?php echo("Account Created"); ?></title>
<?php require_once 'Edit-Meun/head_end.php';?>
<body>
<div class="form" id="for">
   <div class="container">
	
	<!--<h3 class="purple-text text-darken-4 center">Hey,<?php  echo$_SESSION['surname'] ?></h3>
        <h4> Your account was successfully created! </h4>-->
            <?php if( isset($_SESSION['message']) AND !empty($_SESSION['message']) ):
        echo $_SESSION['message'];    
    else:
        header( "location: Login.php" );
    endif;?>
        <h3><a href="Login.php">Login?</a></h3>

</div>
    
</div>
</body>
</html>
