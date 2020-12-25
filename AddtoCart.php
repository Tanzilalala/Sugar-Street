<?php

    session_start();
    $name=filter_input(INPUT_POST,'name');
    $price=filter_input(INPUT_POST,'price');
    $image=filter_input(INPUT_POST,'image');
    $quantity = filter_input(INPUT_POST,'quantity');

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


       $sql="INSERT INTO cart(name,price,quantity,image) values ('$name','$price','$quantity','$image')";


       if($conn->query($sql)){

        $query1 ="UPDATE products SET quantity=1 WHERE name=$name";
        $result1= mysqli_query($conn,$query1);
         // echo "<script type='text/javascript'>
         //alert('Coding is great! ')
         //</script>
        // ";
        header("location: $loc");

            
       	}
        else if(mysqli_errno($conn)==1062){

           echo "You have already added this to your cart <br>";
           $link_address1 = $loc;
           echo "<a href='$link_address1'>Let's go back</a>";
         
       }
         
        
       else{
		 echo "Error: ".$sql ."<br>".$conn->error;	
	   }
}





$conn->close();
//session_destroy();




?>





