<?php
session_start();
$dbusername ="id15764414_root";
$dbpassword ="W@\c5tlJ)zJ>=}1";
$dbname="id15764414_sugarstreet";

$conn=mysqli_connect("localhost","root","","sugarstreet");
$name=filter_input(INPUT_POST,'name');
 

if (isset($_POST['delbtn'])){
	$_SESSION["price"]=$total;
    $prodname=$_SESSION["prodName"];
    $_SESSION["prodQuantity"]=$quanitity;
       $sql1 = "SELECT * FROM products WHERE name=$prodname";
       $res = mysqli_query($conn, $sql1);
       $r = mysqli_fetch_array($res);
       $quan=$r["quantity"];
       $query1 ="UPDATE quantity SET quantity=quanitity-$quan WHERE name=$name";
       $result1 = mysqli_query($conn, $query1);

	$sql="DELETE FROM cart WHERE name='$name'";
	$result=mysqli_query($conn,$sql);
	header("Location: Cart.php");
	
}

else{
  
}

?>