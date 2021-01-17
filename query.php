<?php
$host = "localhost";
$username = "webdev";
$password = "dev123";
$database = "ethical_hacking";
$connection = mysqli_connect($host, $username, $password, $database);

if($connection->connect_error)
        {
        die('Connection failed'.$conn_connect_error());
	}
if(isset($_POST['submit']))
	{
	$msg= $_POST['msg'];
	session_start();
	$Uname= $_SESSION['username'];
	echo $Uname;
	$sql = "INSERT INTO Msg (Name, Query) VALUES ('$Uname', '$msg')";
	
	if (!mysqli_query($connection, $sql))
        	{
        	die('An error occured when submitting');
        	}
	else
       	 	{
       		 echo "<script>alert('Successfully posted');document.location='Home.php'</script>";
		}	
	}
		
?>
