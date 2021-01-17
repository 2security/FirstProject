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
if(isset($_POST['submit']))
	{
	$name = $_POST['Name'];
	$email = $_POST['Email'];
	session_start();
	$username=$_SESSION['username'];
	$sql="update RegisterTb set name='$name',email='$email' where username='$username'";

	if(!mysqli_query($connection, $sql))
		{
	        die('An error occured when submitting');
	        }
	 else
                {
		echo "<script>alert('Successfully updated');document.location='Home.php'</script>";
		
                }
	}

?>
