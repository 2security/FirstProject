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
$selectquery1 = "select name from RegisterTb where username='$username'";
$result1 = $connection->query($selectquery1);
while($row = $result1->fetch_assoc())
        {
	echo "Welcome: ". $row['name'] . "<br>";
	}

?>
<html>
<body>
<form action="query.php" method="post">
</br><a href="logout.php">Logout</a>
<hr/>
<a href="UpdatePro.php">Update Profile</a>
<hr/>
<a href="search.html">Search</a>
<hr/>
Post Your Message: <input type="text" name="msg"/>
<input type="submit" name="submit" value="Post"/>
<hr/>
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
$selectquery = "select Query from Msg where Name='$username'";

$result = $connection->query($selectquery);
while($row = $result->fetch_assoc())
        {
        echo $row['Query'] . "<br>";
        }
?>
</form>
</body>
</html>
