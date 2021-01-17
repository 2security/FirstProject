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
session_start();
$username = $_SESSION['username'];
$selectquery = "select name, email from RegisterTb where username='$username'";
$result = $connection->query($selectquery);
while($row = $result->fetch_assoc())
        {
                echo "Name: ". $row['name']."<br>";
                echo "Email: ". $row['email']."<br>";
        }

?>
<html>
        <head>
                <title>ProfileUpdate</title>
        </head>
	<body>
	<form action="Update.php" method="POST">
		</br>
		Name: <input type="text" name="Name" placeholder="Type Name"></br></br>
		Email: <input type="text" name="Email" placeholder="Enter mail"></br></br>
                <input type="button" value="Home" onClick="document.location.href='Home.php'">
                <input type="submit" name="submit" value="Update"/>
        </form>
</body>
</html>
