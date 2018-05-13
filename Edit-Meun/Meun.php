<?php
require_once 'database/functions.php';
?>
<nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
              <a class="navbar-brand" > Chatty Dev </a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Testimonials</a></li>
                        <li><a href="pages/Register.php">Service</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">contact</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <div class="w3-dropdown-hover w3-transparent">
                        <a href="#" class="w3-hide-small w3-right w3-padding" title="My Account">
                        <img src="img/avatar2.png" class="w3-circle" style="height:43px;width:43px" alt="Avatar"></a> 
                        <div class="w3-dropdown-content">
                            <a href="#" class="w3-bar-item w3-bar-block" onclick="document.getElementById('id01').style.display='block'">Profile</a>
                            <a href="logout.php" class="w3-bar-item w3-bar-block">Logout</a>
                        </div>
                    <!--     -->
                    </ul>
                </div>
            </div>
        </nav>