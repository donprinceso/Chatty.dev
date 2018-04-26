<?php
require_once "database/db.php";

	//DB Connection Variable
	$con = mysqli_connect($host,$user,$pass,$db);
        
       
        
        function check_is_user($surname){

		global $con;

		$query = "SELECT * FROM register WHERE surname = '$surname' ";
		$result = mysqli_query($con,$query);

		if ( mysqli_num_rows($result) > 0 ){
                                
                        $_SESSION['surname']=$surname;
				return true;
			}

			else{

				return false;
			}
		}
        function return_user_input($text){

		if (isset($_REQUEST[$text])){

			$text = $_REQUEST[$text];
			echo $text;
		}
	}
	function get_full_username($surname){

		global $con;

		$query = "SELECT * FROM register WHERE surname = '$surname' ";
		$result = mysqli_query($con,$query);

		if ( mysqli_num_rows($result) > 0 ){

			while ($row = mysqli_fetch_assoc($result)) {
				$data = $row["surname"]." ". $row["firstname"];
				return $data;
			}
		}
        }