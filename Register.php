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
	$username = $_POST['Username'];
	$name = $_POST['Name'];
	$mail = $_POST['Email'];
	$pwd = $_POST['Password'];
	$pwdcrm = $_POST['PasswordConfirm'];
	if($pwd == $pwdcrm)
		{
		$query = "INSERT INTO RegisterTb (username, name, email, password) VALUES ('$username','$name', '$mail', '$pwd')";
		if (!mysqli_query($connection, $query))
			{
			die('An error occured when submitting');
			}
		else
			{
			echo "<script>alert('Successfully Registered');document.location='Login.html'</script>";
			}
		}
	else
		echo "<script>alert('Please enter same password');document.location='Registration.html'</script>";
	}
?>
