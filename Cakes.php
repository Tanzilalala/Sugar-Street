<?php
session_start();
$_SESSION["loc"]="Cakes.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>CAKES</title>
	<link href="index.css" rel="stylesheet" type="text/css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
		<style type="text/css">
		.product-filter {
		  display: flex;
		}
		
		.product-filter h1 {
		  flex-grow: 1;
		}
		.sort {
			  display: flex;
			}
		.collection-sort {
		  display: flex;
		  flex-direction: column;
		}
		.products {
		  display: flex;
		  flex-wrap: wrap;
		}
		.products {
		  display: flex;
		  flex-wrap: wrap;
		}

		.product-card {
		  padding: 2%;
		  flex-grow: 1;
		  flex-basis: 16%;

		  display: flex; /* so child elements can use flexbox stuff too! */
		}
		.product-card {
		  flex: 1 16%;
		}
		.product-image img {
		  max-width: 100%;
		}
		.product-info {
		  margin: 5px 0px 0px 5px;
		}
		@media (max-width: 920px) {
		  .product-card {
		    flex: 1 21%;
		  }
		}
		/* Select the first two */
		.products .product-card:first-child, 
		.products .product-card:nth-child(2) {
		  flex: 2 46%;
		}

		h5{
			font-size: 25px;
		}

		h6{
			font-size: 20px;
		}

		@media (max-width: 500px) {
		  .product-card {
		    flex: 1 46%;
		  }
		}
		@media (max-width: 480px) {
		  .product-filter {
		    flex-direction: column;
		  }
		}
		@media (max-width: 480px) {
		  .product-filter {
		    flex-direction: column;
		  }
		  .sort {
		    align-self: flex-start;
		  }
		}

		button{
			margin-top: 10%;
		}

		.product-card input{

			width: 120px;

		}



	</style>
	
</head>
<body>
   
	
	<header>


	<div class="container">       
			<img src="images\logos\19020180.png" class="logo"> 

	      <nav>
	        <ul>	          
	          <li><a href="Index.php">Home</a></li>
	          <li><a href="#">Contact Us</a></li>
	          <li><a href="LogOut.php">Logout</a></li>
	          <li><div class="dropdown">
					  <button class="dropbtn">Shop by Category</button>
					  <div class="dropdown-content">
					    <a href="Cakes.php">CAKES</a>
					    <a href="Cupcakes.php">CUPCAKES</a>
					    <a href="Cookies.php">COOKIES</a>
					  </div>
					</div>
			  <li><form class="search" action='Search.php' method="post">
	          <input type="search" name="search" required></li>
	          <button type="submit"><i class="search" ><i class="fa fa-search" aria-hidden="true"></i></i></button>
	          </form>
			  
				</li>


	          
	        </ul>
	      </nav>

	      

	    </div>

	    <style>
		     img{
					max-width: 500px;
		            max-height: 300px;	            
					opacity: 85%;
					margin: 5px 0px 15px 0px;

		        }
         </style>
	     
	    	
	</header>


	    

	    <a href="Cart.php" class="float"><i class="fa fa-shopping-cart my-float" aria-hidden="true"></i></i></i>
		</a>


		
<nav class="product-filter">

  <div class="sort">

    <div class="collection-sort">
      
    </div>

    <div class="collection-sort">
      
    </div>

  </div>

</nav>
<section class="products">

  <!-- It's likely you'll need to link the card somewhere. You could add a button in the info, link the titles, or even wrap the entire card in an <a href="..."> -->

  
<?php
 
 $dbusername ="id15764414_root";
    $dbpassword ="W@\c5tlJ)zJ>=}1";
    $dbname="id15764414_sugarstreet";
$mysqli = new mysqli("localhost", $username, $password, $database);

$Search = mysqli_real_escape_string($mysqli,filter_input(INPUT_POST,'search'));

$query = "SELECT * FROM products WHERE type='food'";
$result = $mysqli->query($query);
 
 
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $name = $row["name"];
        $type = $row['type'];
        $price = $row['price'];
        $image = $row['image'];
        $quantity = $row['quantity'];
		


 ?>
      <form action="AddtoCart.php" method="POST">
       <div class="product-card">
          <div class="product-image">
            <img src=<?php echo 'images/',$image;?>>
            <input type="hidden" name="image" value="<?php echo $row['image']; ?>">
		    </div>
		    <div class="product-info">
		       
		       <h5><?php echo $name;?></h5>
		       <input type="hidden" name="name" value="<?php echo $row['name']; ?>">
		       <h6><?php echo "Tk ",$price;?></h6>
		       <input type="hidden" name="price" value="<?php echo $row['price']; ?>">
		       

		       <?php if($quantity==0){
                  echo "Sorry, not available in stock";
		       }
		       else{
		       ?>

		      
		      <input type="number" name="quantity" min="1" max="<?php echo $quantity;?>" placeholder="Select Quantity" required><br>
		      <button type="submit" onclick="added()"></i>Add to cart</i></button>
		      </form>
		     <?php } ?>

		    </div>
		  </div>
<?php

    } 
    $result->free();

    
 }?>



</section>


</body>





</html>