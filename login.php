<?php
session_start();
if(isset($_SESSION['username']))
{
$username = $_SESSION['username'];
$success = array();
$success['message'] = "You are already logged in as ".$username;
header("refresh:5;url=index.php");
}
if(empty($username))
{
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
	$username = $_POST['login_username'];
	$password = $_POST['login_pass'];
	$message=array();
	$conn = mysqli_connect("localhost","root","","coffee");
	
	$username = mysqli_real_escape_string($conn, $username);
	$sql = "SELECT id,pass, salt FROM reg WHERE username = '$username';";
	$query = mysqli_query($conn, $sql);
	if(isset($_POST['login_username']))
	{
	if(mysqli_num_rows($query) < 1){
		$message['username'] = "Username not found, Would you like to register?";
	}
	}
	
	$row = mysqli_fetch_array($query, MYSQLI_ASSOC);
	$hash = hash('sha256', $row['salt'] . hash('sha256', $password) );
	
	if(isset($_POST['login_pass']))
	{
	if($hash != $row['pass'])
	{
    $message['pass'] = "Password Incorrect";
	}
	else
	{
	$_SESSION['username'] = $username;
	$_SESSION['id'] = $row['id'];
	$_SESSION['fname'] = $fname;
	header("location: index.php");
	}
	}
	}
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Log in</title>
    <link rel="stylesheet" href="styles/login.css">
  </head>
  <body>

    <div class="center">
      <h1>Login</h1>
      <form action="login.php" method="post">
        <div class="txt_field"><?php if(isset($success['message'])){echo "<center><h4>" .$success['message']. "</h4></center>"; echo"<br><center><h5>Redirecting you back to home page</h5></center><br>"; die();}?>
          <input type="text" id = "login_username" name = "login_username" required>
          <span></span>
          <label>Username</label>
        </div>
<?php if(isset($message['username'])){echo "<h4>" .$message['username']. "</h4>"; } ?>
        <div class="txt_field">
          <input type="password" id = "login_pass" name = "login_pass" required>
          <span></span>
          <label>Password</label>
        </div>
<?php if(isset($message['pass'])){ echo "<h4>" .$message['pass']. "</h4>"; } ?>
        <input type="submit" value="Login">
        <div class="signup_link">
          Not a member? <a href="register.php">Register Here.</a>
        </div>

      </form>
      
    </div>

  </body>
</html>
