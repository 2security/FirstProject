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
$sname=$_POST['startname'];
$selectquery = "select name from RegisterTb where name like '%{$sname}%'";
$result = $connection->query($selectquery);
while($row = $result->fetch_assoc())
        {
        echo $row['name'] . "<br>";
        }

?>
