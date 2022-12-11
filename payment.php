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
if(isset($_SESSION['username']))
{
$id=$_SESSION['id'];
$username = $_SESSION['username']; 
$conn = mysqli_connect("localhost","root","","coffee");
$sql = "SELECT fname FROM reg WHERE id = '$id'";
$retval = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($retval, MYSQLI_ASSOC); 
$fname = $row['fname'];
$sql2 = mysqli_query($conn,"SELECT SUM(coffprice) FROM cart WHERE orderid = '$id'");
	while($row = mysqli_fetch_array($sql2))
	{
		$price = $row['SUM(coffprice)'];
	}
$_SESSION['fname'] = $fname;
$_SESSION['price'] = $price;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="styles/payment.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
</head>

<body>


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
  

</body>

<body>
    <div class="wrapper">
        <h2>Payment Form</h2>
        <form action="index.php" method="post">
            
            <h4>Delivery Information</h4>
			<div class="input_group">
                <div class="input_box">
					<?php echo "<p class='name'>Delivery Recipient:  ".$fname.'</p>';?>
					<i class="fa fa-money icon" aria-hidden="true"></i>
                </div>
            </div>
            <div class="input_group">
                <div class="input_box">
                    <input type="text" name = "address" placeholder="Address" required class="name">
                    <i class="fa fa-map-marker icon" aria-hidden="true"></i>
                </div>
            </div>
            <div class="input_group">
                <div class="input_box">
                    <input type="text" name = "city" placeholder="City" required class="name">
                    <i class="fa fa-institution icon"></i>
                </div>
            </div>
            
            
            <div class="input_group">
                <div class="input_box">
                    <h4>Payment Method</h4>
                    <input type="radio" name="pay" class="radio" id="bc1" value="Gcash" checked>
                    <label for="bc1"><span>
                            <i class=""></i>GCash</span></label>
                    <input type="radio" name="pay" class="radio" id="bc2" value="COD">
                    <label for="bc2"><span>
                            <i class="fa "></i>COD</span></label>
                </div>
            </div>
            <div class="input_group">
                <div class="input_box">
                    <input type="tel" name="number" class="name" placeholder="+63 or 09*********" required>
                    <i class="fa fa-credit-card icon"></i>
                </div>
            </div>
            <div class="input_group">
                <div class="input_box">
                    <div class="input_box">
                        <input type="text" name = "landmark" placeholder="Landmark" class="name">
                        <i class="fa fa-map-marker icon" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
			<div class="input_group">
            <div class="input_box">
                <input type="number" name = "change" placeholder="Change For How Much" required class="name">
                <i class="fa fa-money icon" aria-hidden="true"></i>
            </div>
            </div>
			<div class="input_group">
            <div class="input_box">
				<?php echo "<p class='name'>Amount to be paid:  ".$price.'</p>';?>
                <i class="fa fa-money icon" aria-hidden="true"></i>
            </div>
            </div>

            <div class="input_group">
                <div class="input_box">
				<br>
                    <input type="submit" name="CHECKOUT" value = "checkout">
                </div>
            </div>

        </form>
    </div>

</body>

</html>