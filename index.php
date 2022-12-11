<?php
session_start();
if(isset($_SESSION['fname']))
{
	$fname = $_SESSION['fname'];
}
if(isset($_SESSION['price']))
{
	$price = $_SESSION['price'];
}
$pass = array();
if(isset($_SESSION['username']))
{
$username = $_SESSION['username'];
$id=$_SESSION['id'];
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$pass['pass'] = "element";
	$add = $_POST['address'];
	$city = $_POST['city'];
	$landmark = $_POST['landmark'];
	$change = $_POST['change'];
	$number = $_POST['number'];
	$method = $_POST['pay'];
	$sukli = $change - $price;
}
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee n' Chill</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
  </head>
  <body>

    <section>
      <input type="checkbox" id="check">
      <header>
        <img src="assets/pics/LOGO.png" width="100px" height="100px">
        </div>
        <h2><a href="#" class="logo"></a></h2>
        <div class="navigation">
          <a href="index.php">Home</a>
          <?php if(isset($_SESSION['username'])){echo "<a href='logout.php'>Logout</a>";} else {echo "<a href='login.php'>Login</a>";}?>
          <a href="product.php">Products</a>
          <a href="about.php">About us</a>
        </div>
		
      </header>
      <div class="content">
        <div class="info">
          <h2>Brewed<br>to your liking.</h2>
          <p>We freshly served coffee so you can drink and chill.</p>
          <a href="login.php" class="info-btn">Get Started</a>
		  
        </div>
      </div>
	  <?php 
	  if(isset($pass['pass']))
	  {
		echo '<div class="wrapper">';
		echo '<h2>Your order has been placed <br>Here are your details:</h2>';
		echo '<h4>Recipients Name: 	'.$fname.'</h4><br>';
		echo '<h4>Address: 	'.$add.' '.$city.' city</h4><br>';
		echo '<h4>Contact Number: 	'.$number.'</h4><br>';
		if(isset($landmark))
		{echo '<h4>Landmark: 	'.$landmark.'</h4><br>';}
		echo '<h4>Payment Method: 	'.$method.'</h4><br>';
		echo '<h4>Recipients Change: 	'.$sukli.'</h4><br>';
		echo '</div>';
		header("refresh:5;url=clear.php");
	  }
	  ?>
	  <?php
	  if(isset($pass['pass']))
	{
	echo '<div class="cart">';
	echo '<br>';
	echo '<center>Cart Total</center>';
	echo '<br>';
	echo '<table>';
	echo '<tr>';
	echo '<th>Type of Coffee</th>';
	echo '<th>Coffee Size</th>';
	echo '<th>Amount</th>';
	echo '<th>Total Price</th>';
	echo '</tr>';
	
	
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
}
	echo '</table>';
	echo '</div>';
}

	
	
	?>
      <div class="media-icons">
        <a href="https://www.facebook.com/profile.php?id=100086764460821"><i class="fab fa-facebook-f"></i></a>
        <a href="https://twitter.com/Coffeenchill22"><i class="fab fa-twitter"></i></a>
        <a href="https://www.instagram.com/coffee_n_chill22/"><i class="fab fa-instagram"></i></a>
      </div>
    </section>

  </body>
</html>
