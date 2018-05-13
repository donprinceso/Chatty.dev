 <?php
/* Displays user information and some useful messages */
session_start();
require_once 'database/functions.php';
?>
 <!DOCTYPE html>
<html >
    
<?php require_once 'Edit-Meun/head_start.php';?>
    <title>Chatty.Dev</title>
<?php require_once 'Edit-Meun/head_end.php';?>
<body>
    <?php require 'Edit-meun/Meun.php'; ?>
    <!-- Page Container -->
    <nav class="w3-sidebar w3-collapse w3-white w3-card-2 w3-margin-bottom" id="mySidenav" style="width: 20%;margin-bottom: 30px;">
<div class="w3-bar-block">
 <div class="w3-container">
  <h4 class="w3-margin-top">HTML and CSS</h4>
 </div>
 <a class="w3-bar-item w3-button" href="#">Learn HTML</a>
 <a class="w3-bar-item w3-button" href="#">Learn CSS</a>
 <a class="w3-bar-item w3-button" href="#">Learn Colors</a>
 <a class="w3-bar-item w3-button" href="#">Learn Bootstrap 3</a>
 <a class="w3-bar-item w3-button" href="#">Learn Bootstrap 4</a>
 <div class="w3-container">
  <h4 class="w3-margin-top">JavaScript</h4>
 </div>
 <a class="w3-bar-item w3-button" href="#">Learn JavaScript</a>
 <a class="w3-bar-item w3-button" href="#">Learn jQuery</a>
 <a class="w3-bar-item w3-button" href="#">Learn JSON</a>
 <div class="w3-container">
  <h4 class="w3-margin-top">Server Side</h4>
 </div>
 <a class="w3-bar-item w3-button" href="#">Learn SQL</a>
 <a class="w3-bar-item w3-button" href="#">Learn PHP</a>
 <div class="w3-container">
  <h4 class="w3-margin-top">C# developing</h4>
 </div>
 <a class="w3-bar-item w3-button" href="#">Learn C# IDE</a>
 <a class="w3-bar-item w3-button" href="#">Learn Form Design</a>
 <div class="w3-container">
  <h4 class="w3-margin-top">Android XML Tutorials</h4>
 </div>
 <a class="w3-bar-item w3-button" href="#">Learn XML</a>
 <a class="w3-bar-item w3-button" href='#'>Learn XML AJAX</a>
 <a class="w3-bar-item w3-button" href="#">Learn XML DOM</a>
 <a class="w3-bar-item w3-button" href='#'>Learn XML DTD</a>
 <a class="w3-bar-item w3-button" href='#'>Learn XML Schema</a>
 <br/>
</div>

</nav>
      
    <div class="w3-container w3-margin-bottom w3-center" style="margin-left: 20%; margin-top: 55px;">
        <div class="w3-card-2 w3-border ">
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
    
            <div class="row w3-light-grey w3-padding w3-center w3-margin-bottom" style="margin-left: 20%">
                <div class="col-sm-4">
                    <div class="w3-card-2 w3-white w3-padding">
                        <h2 class="w3-xxlarge">HTML</h2>
                        <h4 class="w3-text-dark-grey">The language for Building web pages</h4>
                        <a href="#" class="w3-button w3-dark-grey">LEARN HTML</a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="w3-card-2 w3-white w3-padding">
                        <h2 class="w3-xxlarge">CSS</h2>
                        <h4 class="w3-text-dark-grey">The language for styling web pages</h4>
                        <a href="#" class="w3-button w3-dark-grey">LEARN CSS</a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="w3-card-2 w3-white w3-padding">
                        <h2 class="w3-xxlarge">COLOR</h2>
                        <h4 class="w3-text-dark-grey">How To Pick Color for Good web page</h4>
                        <a href="#" class="w3-button w3-dark-grey">LEARN COLOR Picking</a>
                    </div>
                </div>
            </div>
        
    <div class="row w3-padding-24 w3-center " style="margin-left: 25%">
        <div class="col-md-5 w3-margin">
           <h2 class="w3-xxlarge">Bootstrap 3</h2>
           <h4 class="w3-text-dark-grey w3-padding-16">Bootstrap 3 is a CSS framework for designing better web pages</h4>
           <a href="#" class="w3-button w3-dark-grey w3-round-jumbo">LEARN BootStrap 3</a> 
        </div>
        <div class="col-md-5 w3-margin">
           <h2 class="w3-xxlarge">Bootstrap 4</h2>
           <h4 class="w3-text-dark-grey w3-padding-16">Bootstrap 4 is a CSS framework for designing better web pages</h4>
           <a href="#" class="w3-button w3-dark-grey w3-round-jumbo">LEARN BootStrap 4</a> 
        </div>
    </div>
    <div class="row w3-center w3-margin-bottom w3-card-4 w3-margin-top" style="margin-left: 20%;">
        <div class="col-md-3 w3-border">
            <h1 class="w3-xxlarge">JavaScript</h1>
            <h5 class="w3-text-dark-gray">Lean javascript Language for web pages</h5>
            <h5 class="w3-text-dark-gray">Lean javascript Language for web pages</h5>
            <h5 class="w3-text-dark-gray">Lean javascript Language for web pages</h5>
            <a href="#" class="w3-button w3-dark-grey w3-margin-bottom">LEARN JavaScript</a>
            <a href="#" class="w3-button w3-dark-grey w3-margin-bottom">LEARN jQuery</a>
            <a href="#" class="w3-button w3-dark-grey w3-margin-bottom">LEARN JSON</a> 
        </div>
        <div class="col-md-3 w3-border">
            <h1 class="w3-xxlarge">Server</h1>
            <h5 class="w3-text-dark-gray">Lean javascript Language for web pages</h5>
            <h5 class="w3-text-dark-gray">Lean javascript Language for web pages</h5>
            <h5 class="w3-text-dark-gray">Lean javascript Language for web pages</h5>
            <a href="#" class="w3-button w3-dark-grey w3-margin-bottom">LEARN JavaScript</a>
            <a href="#" class="w3-button w3-dark-grey w3-margin-bottom">LEARN jQuery</a>
            <a href="#" class="w3-button w3-dark-grey w3-margin-bottom">LEARN JSON</a>
        </div>
        <div class="col-md-3 w3-border">
            <h1 class="w3-xxlarge">C shape</h1>
            <h5 class="w3-text-dark-gray">Lean javascript Language for web pages</h5>
            <h5 class="w3-text-dark-gray">Lean javascript Language for web pages</h5>
            <h5 class="w3-text-dark-gray">Lean javascript Language for web pages</h5>
            <a href="#" class="w3-button w3-dark-grey w3-margin-bottom">LEARN JavaScript</a>
            <a href="#" class="w3-button w3-dark-grey w3-margin-bottom">LEARN jQuery</a>
            <a href="#" class="w3-button w3-dark-grey w3-margin-bottom">LEARN JSON</a> 
        </div>
        <div class="col-md-3 w3-border">
            <h1 class="w3-xxlarge">Android</h1>
            <h5 class="w3-text-dark-gray">Lean javascript Language for web pages</h5>
            <h5 class="w3-text-dark-gray">Lean javascript Language for web pages</h5>
            <h5 class="w3-text-dark-gray">Lean javascript Language for web pages</h5>
            <a href="#" class="w3-button w3-dark-grey w3-margin-bottom">LEARN JavaScript</a>
            <a href="#" class="w3-button w3-dark-grey w3-margin-bottom">LEARN jQuery</a>
            <a href="#" class="w3-button w3-dark-grey w3-margin-bottom">LEARN JSON</a>
        </div>
    </div>
     <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
        <img src="img/avatar3.png" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">
      </div>

      <form class="w3-container" action="/action_page.php">
        <div class="w3-section">
          <label><b>Surname</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Surname" name="surname" required>
          <label><b>Firstname</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Firstname" name="firstname" required>
          <label><b>Username</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username" name="usrname" required>
          <label><b>Password</b></label>
          <input class="w3-input w3-border" type="password" placeholder="Enter Password" name="psw" required>
          <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Update Profile</button>
        </div>
      </form>

      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
      </div>

    </div>
  </div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="Bootstrap/js/bootstrap.min.js"></script>

</body>
</html>