<?php

    session_start();
    $Name = filter_input(INPUT_POST,'name');
    $Email = filter_input(INPUT_POST,'email');
    $Password = filter_input(INPUT_POST,'password');
    $_SESSION["name"]=$Name; 
   
  
	  $host="localhost";
    $dbusername ="id15764414_root";
    $dbpassword ="W@\c5tlJ)zJ>=}1";
    $dbname="id15764414_sugarstreet";

//$conn =new mysqli($host,$dbusername,$dbpassword,$dbname);
$conn=mysqli_connect($host,$dbusername,$dbpassword,$dbname);




if(mysqli_connect_error()){
	die('Connect Error ('.mysqli_connect_errno().')'
		.mysqli_connect_error());
		
}
	
else{
       $sql="INSERT INTO user(name,email,password) values ('$Name','$Email','$Password')";
       if($conn->query($sql)){
           echo "<a href='$link_address1'>Thank you for registering</a>";
           header("location: Login.html");
       	}
         else if(mysqli_errno($conn)==1062){

           echo "This email address has already been registered <br>";
           $link_address1 = 'SignUp.html';
           echo "<a href='$link_address1'>Please try signing up with a different email address</a>";
         }
        
       else{
		 echo "Error: ".$sql ."<br>".$conn->error;	
	   }
}

$conn->close();
//session_destroy();


?>

