<?php
session_start();
if(isset($_SESSION['username']))
{
$id=$_SESSION['id'];
$username = $_SESSION['username']; 
$conn = mysqli_connect("localhost","root","","coffee");

if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$orderid = $_SESSION['id'];
		$choice = $_POST['choice'];
		if($choice == "ArabR")
		{
			$type = 'Arabica';
			$size = 'Regular';
			$price = 110;
			$amount = 1;
			$search_query = mysqli_query($conn, "SELECT * FROM cart WHERE orderid = '$orderid' AND cofftype ='$type' AND coffsize ='$size'");
			$num_row = mysqli_num_rows($search_query);
			if($num_row >= 1)
			{
			$sql="UPDATE cart SET amount = amount + 1, coffprice = coffprice + '$price' WHERE orderid = '$orderid' AND cofftype ='$type' AND coffsize ='$size'";
			mysqli_query($conn,$sql);
			}
			else{
			$sql="INSERT INTO cart (orderid, cofftype, coffsize, coffprice, amount) 
			VALUES ('$orderid','$type','$size','$price','$amount')";
			mysqli_query($conn,$sql);
			}
		}
		if($choice == "ArabL")
		{
			$type= 'Arabica';
			$size= 'Large';
			$price= 120;
			$amount = 1;
			$search_query = mysqli_query($conn, "SELECT * FROM cart WHERE orderid = '$orderid' AND cofftype ='$type' AND coffsize ='$size'");
			$num_row = mysqli_num_rows($search_query);
			if($num_row >= 1)
			{
			$sql="UPDATE cart SET amount = amount + 1, coffprice = coffprice + '$price' WHERE orderid = '$orderid' AND cofftype ='$type' AND coffsize ='$size'";
			mysqli_query($conn,$sql);
			}
			else{
			$sql="INSERT INTO cart (orderid, cofftype, coffsize, coffprice, amount) 
			VALUES ('$orderid','$type','$size','$price','$amount')";
			mysqli_query($conn,$sql);
			}
		}
		if($choice == "FrappR")
		{
			$type= 'Frappuccino';
			$size= 'Regular';
			$price= 140;
			$amount = 1;
			$search_query = mysqli_query($conn, "SELECT * FROM cart WHERE orderid = '$orderid' AND cofftype ='$type' AND coffsize ='$size'");
			$num_row = mysqli_num_rows($search_query);
			if($num_row >= 1)
			{
			$sql="UPDATE cart SET amount = amount + 1, coffprice = coffprice + '$price' WHERE orderid = '$orderid' AND cofftype ='$type' AND coffsize ='$size'";
			mysqli_query($conn,$sql);
			}
			else{
			$sql="INSERT INTO cart (orderid, cofftype, coffsize, coffprice, amount) 
			VALUES ('$orderid','$type','$size','$price','$amount')";
			mysqli_query($conn,$sql);
			}
		}
		if($choice == "FrappL")
		{
			$type= 'Frappuccino';
			$size= 'Large';
			$price= 160;
			$amount = 1;
			$search_query = mysqli_query($conn, "SELECT * FROM cart WHERE orderid = '$orderid' AND cofftype ='$type' AND coffsize ='$size'");
			$num_row = mysqli_num_rows($search_query);
			if($num_row >= 1)
			{
			$sql="UPDATE cart SET amount = amount + 1, coffprice = coffprice + '$price' WHERE orderid = '$orderid' AND cofftype ='$type' AND coffsize ='$size'";
			mysqli_query($conn,$sql);
			}
			else{
			$sql="INSERT INTO cart (orderid, cofftype, coffsize, coffprice, amount) 
			VALUES ('$orderid','$type','$size','$price','$amount')";
			mysqli_query($conn,$sql);
			}
		}
		if($choice == "CappR")
		{
			$type= 'Cappuccino';
			$size= 'Regular';
			$price= 120;
			$amount = 1;
			$search_query = mysqli_query($conn, "SELECT * FROM cart WHERE orderid = '$orderid' AND cofftype ='$type' AND coffsize ='$size'");
			$num_row = mysqli_num_rows($search_query);
			if($num_row >= 1)
			{
			$sql="UPDATE cart SET amount = amount + 1, coffprice = coffprice + '$price' WHERE orderid = '$orderid' AND cofftype ='$type' AND coffsize ='$size'";
			mysqli_query($conn,$sql);
			}
			else{
			$sql="INSERT INTO cart (orderid, cofftype, coffsize, coffprice, amount) 
			VALUES ('$orderid','$type','$size','$price','$amount')";
			mysqli_query($conn,$sql);
			}
		}
		if($choice == "CappL")
		{
			$type= 'Cappuccino';
			$size= 'Large';
			$price= 140;
			$amount = 1;
			$search_query = mysqli_query($conn, "SELECT * FROM cart WHERE orderid = '$orderid' AND cofftype ='$type' AND coffsize ='$size'");
			$num_row = mysqli_num_rows($search_query);
			if($num_row >= 1)
			{
			$sql="UPDATE cart SET amount = amount + 1, coffprice = coffprice + '$price' WHERE orderid = '$orderid' AND cofftype ='$type' AND coffsize ='$size'";
			mysqli_query($conn,$sql);
			}
			else{
			$sql="INSERT INTO cart (orderid, cofftype, coffsize, coffprice, amount) 
			VALUES ('$orderid','$type','$size','$price','$amount')";
			mysqli_query($conn,$sql);
			}
		}
		if($choice == "MochaR")
		{
			$type= 'Mocha';
			$size= 'Regular';
			$price= 120;
			$amount = 1;
			$search_query = mysqli_query($conn, "SELECT * FROM cart WHERE orderid = '$orderid' AND cofftype ='$type' AND coffsize ='$size'");
			$num_row = mysqli_num_rows($search_query);
			if($num_row >= 1)
			{
			$sql="UPDATE cart SET amount = amount + 1, coffprice = coffprice + '$price' WHERE orderid = '$orderid' AND cofftype ='$type' AND coffsize ='$size'";
			mysqli_query($conn,$sql);
			}
			else{
			$sql="INSERT INTO cart (orderid, cofftype, coffsize, coffprice, amount) 
			VALUES ('$orderid','$type','$size','$price','$amount')";
			mysqli_query($conn,$sql);
			}
		}
		if($choice == "MochaL")
		{
			$type= 'Mocha';
			$size= 'Large';
			$price= 150;
			$amount = 1;
			$search_query = mysqli_query($conn, "SELECT * FROM cart WHERE orderid = '$orderid' AND cofftype ='$type' AND coffsize ='$size'");
			$num_row = mysqli_num_rows($search_query);
			if($num_row >= 1)
			{
			$sql="UPDATE cart SET amount = amount + 1, coffprice = coffprice + '$price' WHERE orderid = '$orderid' AND cofftype ='$type' AND coffsize ='$size'";
			mysqli_query($conn,$sql);
			}
			else{
			$sql="INSERT INTO cart (orderid, cofftype, coffsize, coffprice, amount) 
			VALUES ('$orderid','$type','$size','$price','$amount')";
			mysqli_query($conn,$sql);
			}
		}
	}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="styles/product.css" >
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <title> Products </title>
</head>

<body>


    <header>
      <img src="assets/pics/LOGO.png" width="100px" height="100px">
      <h2><a href="#" class="logo"></a></h2>
      <div class="navigation">
        <a href="index.php">Home</a>
        <?php if(isset($_SESSION['username'])){echo "<a href='logout.php'>Logout</a>";} else {echo "<a href='login.php'>Login</a>";}?>
        <a href="product.php">Products</a>
        <a href="about.php">About us</a>
      </div>
   </header>
</body>
<table class="center">

	<tr>
		<th>
<body>
  <div class="wrapper">
    <div class="product-img">
      <img src="assets/pics/arabica.jpeg" height="420" width="400">
    </div>
    <div class="product-info">
      <div class="product-text">
        <h1>Arabica</h1>
        <br>
        <p><br>
          Arabica beans have a sweeter, more complex <br>
          flavor that you can drink straight.<br>

			</p>
		</div>
		<form action="product.php" method="post">
		<label class="container" align="left" ><pre>       		₱ 110.00 - Regular</pre>
		<input type="radio" name="choice" value="ArabR">
		<span class="checkmark"></span>
		</label>
		<label class="container" align="left" ><pre>       		₱ 120.00 - Large</pre>
		<input type="radio" name="choice" value="ArabL">
		<span class="checkmark"></span>
		</label>

		<br>
		<div class="product-price-btn">
        <input type="submit" name="submit" value="Add to Cart"></input></a> 
		</form>
      </div>
    </div>
  </div>
</body>
		</th>
		<th>
<body>
  <div class="wrapper">
    <div class="product-img">
      <img src="assets/pics/frapuccino.jpg" height="420" width="450">
    </div>
    <div class="product-info">
      <div class="product-text">
        <h1>Frappuccino</h1>
        <br>
        <p><br>
          Frappuccino is a blended iced coffee <br>
          drink that’s topped with whipped cream<br>
           and syrup.
      </div>
	  <form action="product.php" method="post">
	  <label class="container" align="left" ><pre>       		₱ 140.00 - Regular</pre>
		<input type="radio" name="choice" value="FrappR">
		<span class="checkmark"></span>
		</label>
		<label class="container" align="left" ><pre>       		₱ 160.00 - Large</pre>
		<input type="radio" name="choice" value="FrappL">
		<span class="checkmark"></span>
		</label>
      <br>
	  
        <input type="submit" name="submit" value="Add to Cart"></input> 
		</form>    
		
	</div>
	</div>
	
</body>
		<th>
	</tr>
	<tr>
	<th>
<body>
  <div class="wrapper">
    <div class="product-img">
      <img src="assets/pics/cappuccino.jpg" height="420" width="330">
    </div>
    <div class="product-info">
      <div class="product-text">
        <h1>Cappuccino</h1>
        <br>
        <p><br>
          Cappuccino is a latte made with more <br>
           than steamed milk,
          often with a sprinkle of <br> cocoa powder & cinnamon on top. <br>
      </div>
	  <form action="product.php" method="post">
	  <label class="container" align="left" ><pre>       		₱ 120.00 - Regular</pre>
		<input type="radio" name="choice" value="CappR">
		<span class="checkmark"></span>
		</label>
		<label class="container" align="left" ><pre>       		₱ 140.00 - Large</pre>
		<input type="radio" name="choice" value="CappL">
		<span class="checkmark"></span>
		</label>
      <br>
      
        <input type="submit" name="submit" value="Add to Cart"></input>
		</form>
      
    </div>
  </div>
</body>
</th>
<th>
<body>
  <div class="wrapper">
    <div class="product-img">
      <img src="assets/pics/mocha.jpg" height="420" width="370">
    </div>
    <div class="product-info">
      <div class="product-text">
        <h1>Mocha</h1>
        <br>
        <p><br>
          The mocha is a chocolate espresso <br>
           with steamed milk and foam. <br
        </p>
      </div>
	  <form action="product.php" method="post">
	  <label class="container" align="left" ><pre>       		₱ 120.00 - Regular</pre>
		<input type="radio" name="choice" value="MochaR">
		<span class="checkmark"></span>
		</label>
		<label class="container" align="left" ><pre>       		₱ 150.00 - Large</pre>
		<input type="radio" name="choice" value="MochaL">
		<span class="checkmark"></span>
		</label>
      <br>
      <input type="submit" name="submit" value="Add to Cart"></input>
		</form>
    </div>
  </div>
  </th>
</tr>
</table>
	<div class="cart">
	<br>
	<center>Cart Total</center>
	<br>
	<table>
	<tr>
	<th>Type of Coffee</th>
	<th>Coffee Size</th>
	<th>Amount</th>
	<th>Total Price</th>
	</tr>
	<?php
	$conn = mysqli_connect("localhost","root","","coffee");	
	$sql = "SELECT * FROM cart WHERE orderid = $id";
	$result = mysqli_query($conn,$sql);
	while ($row = mysqli_fetch_array($result))
{
	echo "<tr>";
	echo "<td>" .$row['cofftype'] . "</td>";
	echo "<td>" .$row['coffsize'] . "</td>";
	echo "<td>" .$row['amount'] . "</td>";
	echo "<td>" .$row['coffprice'] . "</td>";
	echo "</tr>";
}?>

	</table>
	<center><pre><a class="clear" href="clear.php">Clear Order</a>		<a class="final" href="payment.php">Finalize Order</a> </pre></center>
	</div>
</body>

</html>