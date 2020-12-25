<?php

//session_start();
     
  
$dbusername ="id15764414_root";
$dbpassword ="W@\c5tlJ)zJ>=}1";
$dbname="id15764414_sugarstreet";
$mysqli = new mysqli("localhost", $username, $password, $database);




if(mysqli_connect_error()){
	die('Connect Error ('.mysqli_connect_errno().')'
		.mysqli_connect_error());
		
}
	
        
else{
	echo "Error: ".$sql ."<br>".$conn->error;	
	   
}

$conn->close();
//session_destroy();


?>