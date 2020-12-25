<?php

    session_start();
    $Email = filter_input(INPUT_POST,'loginemail');
    $Password = filter_input(INPUT_POST,'loginpassword');
    $_SESSION["email"]=$Email;  
  
    $dbusername ="id15764414_root";
    $dbpassword ="W@\c5tlJ)zJ>=}1";
    $dbname="id15764414_sugarstreet";

$conn = new mysqli("localhost", $username, $password, $database);

$sql="SELECT password FROM user WHERE email='$Email'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();


if(mysqli_connect_error()){
	die('Connect Error ('.mysqli_connect_errno().')'
		.mysqli_connect_error());
		
}
	
else{
       
       if ($result->num_rows > 0){

             
              if($Password==$row['password']){

               header("location: Index.php");
             }
             else{

               echo "Sorry wrong username/password <br>";
               $link_address1 = 'Login.html';
               echo "<a href='$link_address1'>Try again</a>";
             }

       	}
       
        
       else{
        echo $sql;
		 echo "Error: ".$sql ."<br>".$conn->error;	
	   }
}

$conn->close();
$result->free();
//session_destroy();


?>

