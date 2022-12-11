<?php
	session_start();
 	if(isset($_SESSION['username']))
{
$id=$_SESSION['id'];
$username = $_SESSION['username']; 
$conn = mysqli_connect("localhost","root","","coffee");
$sql = ("DELETE FROM cart WHERE orderid = '$id'");
mysqli_query($conn,$sql);
mysqli_close($conn);
}
	
	header("location:" .$_SERVER['HTTP_REFERER']);
?>