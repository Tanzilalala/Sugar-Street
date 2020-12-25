<!DOCTYPE html>
<html>
<body>

<script>
function myFunction() {
  confirm("Press a button!");
}
</script>

</body>
</html>


<?php

    session_start();
    $phone=filter_input(INPUT_POST,'phone');
    $address=filter_input(INPUT_POST,'address');
    $creditcard=filter_input(INPUT_POST,'creditcard');
    $email=$_SESSION["email"]; 
    $name=$_SESSION["name"]; 
    $amount=$_SESSION["price"]; 
    

    $loc=$_SESSION["loc"];


    
  
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

       $sql="UPDATE user SET phone=$phone,creditcard=$creditcard WHERE email='$email';";

       if($conn->query($sql)){

        $sql1="DELETE FROM cart";
        $sql2="INSERT INTO orders(name,adrs,creditcard,phone,amount) Values ('$email','$address','$creditcard','$phone','$amount')";
        $res=mysqli_query($conn,$sql2);
        $result=mysqli_query($conn,$sql1);
        
        header("location: Index.php");        
            
       	}
       
       else{
		 echo "Error: ".$sql ."<br>".$conn->error;	
	   }
}





$conn->close();
//session_destroy();




?>





