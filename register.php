<?php
session_start();
if(isset($_SESSION['username']))
{
$usernamel = $_SESSION['username'];
$success = array();
$success['message'] = "You are already logged in as ".$usernamel;
header("refresh:5;url=index.php");
}
	$errors = array();
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
	if(preg_match("/\S+/", $_POST['fname']) === 0)
	{
		$errors['fname'] = "* Full Name is required.";
	}
	if(preg_match("/\S+/", $_POST['username']) === 0)
	{
		$errors['username'] = "* Username is required.";
	}
	if(preg_match("/.+@.+\..+/", $_POST['email']) === 0)
	{
		$errors['email'] = "* Not a valid e-mail address.";
	}
	if(preg_match("/.{8,}/", $_POST['pass']) === 0)
	{
		$errors['pass'] = "* Password Must Contain at least 8 Characters.";
	}
	if(strcmp($_POST['pass'], $_POST['confpass']))
	{
		$errors['confpass'] = "* Password do not match.";
	}
	if(count($errors) === 0)
	{
		$conn = mysqli_connect("localhost","root","","coffee");
		$email = $_POST['email'];
		$pass= hash('sha256', $_POST['pass']);
		function createSalt()
		{
   			$string = md5(uniqid(rand(), true));
    		return substr($string, 0, 3);
		}
		$salt = createSalt();
		$pass = hash('sha256', $salt . $pass);
		
		$search_query = mysqli_query($conn, "SELECT * FROM reg WHERE email = '$email'");
		$num_row = mysqli_num_rows($search_query);
		if($num_row >= 1)
		{
			$errors['email'] = "Email address is already taken.";
		}
		else{
		$fname = $_POST['fname'];
		$username = $_POST['username'];
		$number = $_POST['number'];
		
         

        $sql = "INSERT INTO reg (fname, username, email, number, salt, pass) 
		VALUES ('$fname','$username','$email','$number','$salt','$pass')";
        if(mysqli_query($conn, $sql))
		{
			
            $success['success'] = "Registration Successful, Please wait to be redirected to login page...";
        }
		else{
			header("refresh:5;url=register.php");
			mysqli_error($conn);
		}
		
		mysqli_close($conn);
		}
		
		}
		}
	
        ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="styles/register.css">
   </head>
<body>
  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form action="register.php" method="post">
        <div class="user-details">
		<?php if(isset($success['success'])){echo "<h4>" .$success['success']. "</h4>"; header("refresh:5;url=login.php");	} ?>
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" id = "fname" name = "fname" placeholder="Enter your name">
			<?php if(isset($errors['fname'])){echo "<h4>" .$errors['fname']. "</h4>"; } ?>
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" id = "username" name = "username" placeholder="Enter your username">
			<?php if(isset($errors['username'])){echo "<h4>" .$errors['username']. "</h4>"; } ?>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" id = "email" name = "email" placeholder="Enter your email">
			<?php if(isset($errors['email'])){echo "<h4>" .$errors['email']. "</h4>"; } ?>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" id = "number" name = "number" placeholder="Enter your number">
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" id = "pass" name = "pass" placeholder="Enter your password">
            <?php if(isset($errors['pass'])){echo "<h4>" .$errors['pass']. "</h4>"; } ?>
		  </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" id = "confpass" name = "confpass" placeholder="Confirm your password">
			<?php if(isset($errors['confpass'])){echo "<h4>" .$errors['confpass']. "</h4>"; } ?>
		  </div>
		</div>
        <div class="button">
          <input type="submit" name="Register" value="Register">
        </div>
		<div class="text">
			<h3>Already have an account? <a href="login.php">Click here to login</a></h3>
		</div>
      </form>
	</div>
</div>
</body>
</html>

