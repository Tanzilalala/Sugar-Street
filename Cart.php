<?php
session_start();
$_SESSION["price"]=0;
$_SESSION["prodName"]="";
$_SESSION["prodQuantity"]="";

?>
<!DOCTYPE html>
<html>
<head>
	<title>Cart</title>
	<link href="index.css" rel="stylesheet" type="text/css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
		
	
</head>
<body>
   
	
	    


<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

<div class="container">
	<table id="cart" class="table table-hover table-condensed">
    				<thead>
						<tr>
							<th style="width:50%">Product</th>
							<th style="width:10%">Price</th>
							<th style="width:8%">Quantity</th>
							<th style="width:22%" class="text-center">Subtotal</th>
							<th style="width:10%"></th>
						</tr>
					</thead>
						<?php

$dbusername ="id15764414_root";
$dbpassword ="W@\c5tlJ)zJ>=}1";
$dbname="id15764414_sugarstreet";
											$mysqli = new mysqli("localhost", $username, $password, $database);

											$query = "SELECT * FROM cart";
											$result = $mysqli->query($query);
											$total=0;
											 
											 
											if ($result = $mysqli->query($query)) {
											    while ($row = $result->fetch_assoc()) {
											        $name = $row["name"];
											        $price = $row['price'];
											        $image = $row['image'];
											        $quantity = $row['quantity'];
											        $subtotal=$price*$quantity;
											        $total=$total+$subtotal;
											        $_SESSION["price"]=$total;
							                       
											        
											           
						?>
					<form action="remove.php"method="POST">
					<tbody>
						<tr>
							<td data-th="Product">
								<div class="row">
								
									<div class="col-sm-2 hidden-xs"><img  style="width: 60px; height: auto; " src=<?php echo 'images/',$image;?>></div>
									<div class="col-sm-10">
										
										<h4 class="nomargin" style="font-size: 15px;"><?php echo $name;?></h4>
										<input type="hidden" name="name" value="<?php echo $name; ?>">
										
									</div>
								</div>
							</td>
							<td data-th="Price"><?php echo "Tk ",$price;?></td>
							<td data-th="Quantity"><?php echo $quantity;?></td>
							<!-- <td data-th="Quantity">
								<input type="number" class="form-control text-center" value="1">
							</td> -->

							<td data-th="Subtotal" class="text-center"><?php echo "Tk ",$subtotal;?></td>
							<td class="actions" data-th="">
								<!-- <button href="#" class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button> -->
								<button href="#" name="delbtn" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>	
								</form>							
							</td>
						</tr>
					</tbody>
					<?php
					          

							    } 

							    $result->free();
                               }
							 ?>
					<tfoot>
						<tr class="visible-xs">
							<td class="text-center"><strong><?php echo "Total: Tk ",$price;?></strong></td>
						</tr>
						<tr>
							<td><a href="<?php echo $_SESSION["loc"];?>" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
							<td colspan="2" class="hidden-xs"></td>
							<td class="hidden-xs text-center" style="font-size: 20px;"><strong><?php echo "Total: Tk ",$total;?></strong></td>
							<?php ?>

							<td><a href="Checkout.php" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
						</tr>
					</tfoot>
				</table>
</div>

</body>




<style>
	.table>tbody>tr>td, .table>tfoot>tr>td{
    vertical-align: middle;
}
@media screen and (max-width: 600px) {
    table#cart tbody td .form-control{
		width:20%;
		display: inline !important;
	}
	.actions .btn{
		width:36%;
		margin:1.5em 0;
	}
	
	.actions .btn-info{
		float:left;
	}
	.actions .btn-danger{
		float:right;
	}
	
	table#cart thead { display: none; }
	table#cart tbody td { display: block; padding: .6rem; min-width:320px;}
	table#cart tbody tr td:first-child { background: #333; color: #fff; }
	table#cart tbody td:before {
		content: attr(data-th); font-weight: bold;
		display: inline-block; width: 8rem;
	}
	
	
	table#cart tfoot td{display:block; }
	table#cart tfoot td .btn{display:block;}
	
}
</style>


</html>
