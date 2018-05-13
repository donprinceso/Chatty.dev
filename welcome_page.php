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
           <a href="#" class="w3-button w3-dark-grey">LEARN BootStrap 3</a> 
        </div>
        <div class="col-md-5 w3-margin">
           <h2 class="w3-xxlarge">Bootstrap 4</h2>
           <h4 class="w3-text-dark-grey w3-padding-16">Bootstrap 4 is a CSS framework for designing better web pages</h4>
           <a href="#" class="w3-button w3-dark-grey">LEARN BootStrap 4</a> 
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
    
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="Bootstrap/js/bootstrap.min.js"></script>

</body>
</html>