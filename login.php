<?php
$host = "localhost";
$username = "webdev";
$password = "dev123";
$database = "ethical_hacking";
$connection = mysqli_connect($host, $username, $password,$database);

if($connection->connect_error)
        {
        die('Connection failed'.$conn_connect_error());
        }
$Username = $_POST['username'];
$pwd = $_POST['password'];
$sql="select * from RegisterTb where password='$pwd' AND username='$Username'";
$result=mysqli_query($connection,$sql);
$count=mysqli_num_rows($result);
if ($count == 1)
	{
	setcookie('username',$Username, time()*60*60);
	session_start();
	$_SESSION['username']=$Username;
        header("location: Home.php");
	}
else
	{
	 echo "<script>alert('Please enter correct userid and password');document.location='Login.html'</script>";
	}
?>
