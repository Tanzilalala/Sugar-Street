<?php
session_start();
$_SESSION["loc"]="Index.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>My Accounts</title>
	<link href="index.css" rel="stylesheet" type="text/css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	
</head>
<body>
   
	
	<header>


		<div class="container">       
			<img src="images\logos\19020180.png" class="logo"> 

	      <nav>
	        <ul>

	          
	          
	          <li><a href="Index.php">Home</a></li>
	          <li><a href="#">Contact Us</a></li>
	          <li><a href="Account.php">My Account</a></li>
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
					max-width: 100%;
		            height: auto;	            
		            opacity: 85%;

		        }

		      form{
		      	float: right;
		      }
         </style>
	     
	    	
	</header>

	     <div class="banner">
			<!-- <img class="banner-nav" src="images\logos\8838.jpg"> -->
			<p>Hello</p>
			
	    </div>

	    <a href="Cart.php" class="float"><i class="fa fa-shopping-cart my-float" aria-hidden="true"></i></i></i>
		</a>
</body>

<style>

</style>


  <!-- Site footer -->
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>About Us</h6>
            <p class="text-justify">Calling out to all the sweet tooths out there! CAKES, CUPCAKES & COOKIES! All in one place, at the best price. Feel free to contact us for any queries.</p>
          </div>

        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text"> &copy; 2020 All Rights Reserved.
            </p>
          </div>

</footer>



</html>