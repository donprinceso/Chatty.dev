<?php
    include 'database/db.php';

	//DB Connection Variable
	$con = mysqli_connect(dbserver,dbuser,dbpassword,dbname);
        
       
        
        function checkSurname($surname){

		global $con;

		$query = "SELECT surname FROM userdb WHERE surname = '$surname' ";
		$result = mysqli_query($con,$query);
                while ($rows = mysql_fetch_assoc($result)) {
                    $surname_check=$rows['surname'];
                }
                    return $surname_check;
		}
                
        function return_user_input($text){

		if (isset($_REQUEST[$text])){

			$text = $_REQUEST[$text];
			echo $text;
		}
	}
        
        function getUserEmail($email){
    global $con;
     $sql="Select email from userdb Where email='$email'";
     $res= mysqli_query($con, $sql);
     while ($rows= mysqli_fetch_assoc($res)){
         $email_user=$rows['email'];
     }
     return $email_user;
 }
	function get_full_username($surname){

		global $con;

		$query = "SELECT * FROM userdb WHERE surname = '$surname' ";
		$result = mysqli_query($con,$query);

		if ( mysqli_num_rows($result) > 0 ){

			while ($row = mysqli_fetch_assoc($result)) {
				$data = $row["surname"]." ". $row["firstname"];
				return $data;
			}
		}
        }
        
        
        