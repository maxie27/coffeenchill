<?php
session_start();
if(isset($_SESSION['username']))
{
$username = $_SESSION['username'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"/>
   <link rel="stylesheet" href="styles/about.css">
   
   <title>About Us</title>
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

    <div class="container">
        <div class="card">
            <div class="content">
                <div class="imgBx">
                    <img src="assets/faces/angel.png" alt="">
                </div>
                <div class="contentBx">
                    <pre><h4>Angelica Musni</h4></pre>
                    <h5>Database Administrator</h5>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="content">
                <div class="imgBx">
                    <img src="assets/faces/gemma.png" alt="">
                </div>
                <div class="contentBx">
                    <pre><h4>Gemma Capital</h4></pre>
                    <h5>Web Designer</h5>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="content">
                <div class="imgBx">
                    <img src="assets/faces/max.png" alt="">
                </div>
                <div class="contentBx">
                    <pre><h4>Maxinne Nico</h4></pre>
                    <h5>Product & Social Media Manager</h5>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="content">
                <div class="imgBx">
                    <img src="assets/faces/marvin.png" alt="">
                </div>
                <div class="contentBx">
                    <pre><h4>Marvin Gonzales</h4></pre>
                    <h5>Web Designer</h5>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="content">
                <div class="imgBx">
                    <img src="assets/faces/jb.png" alt="">
                </div>
                <div class="contentBx">
                    <pre><h4>John Blare Moraga</h4></pre>
                    <h5>Order Management Specialist</h5>
                </div>
            </div>
        </div>
    </div>
	<div class="message">
	<center><h3>Why COFFEE N' CHILL?<br><br></h3></center>
Coffee N' Chill offers a unique coffee house environment unlike any other. We are not only a place to drop in and get your morning cup of coffee 
(although you are more than welcome to do that), we are a place where you can sit down and enjoy that tailor-made cup of coffee. If you need to work, 
we have a seating area created specifically for you. If you need to rest, we have a soft-seating area in front of a stone fire place that is perfect 
for your weary mind and body. We offer a delicious variety of coffee from Safehouse Coffee made by our professionally trained baristas. We have everything 
from classic coffee to our house made specialty beverages. All of our sauces & syrups are made in-house with all natural ingredients (no chemicals or preservatives) 
ensuring you the highest quality in taste & health. You can complete your coffee with one of our delicious sweet treats made by our very own baker. 
We look forward to serving you at Coffee N' Chill!
	</div>
	
</body>
</html>