<?php

$servername="localhost";
//using mysql database

$username="root";
$password="";
$database="phptut";

//Establishing database connection

$conn=mysqli_connect($servername,$username,$password,$database);

//checking coonection
if(!$conn)
{
	die("failed to connect".mysqli_connect_error());
}

else
{
	echo "connection successful...";
}

echo "<br>";

$sql="INSERT INTO users  VALUES ('4', 'Abhishek', '20', '100000')";
if(mysqli_query($conn,$sql))
{
	echo "Value inserted.";
}
else
{
	echo "Error: ".mysqli_error($conn);
}

mysqli_close($conn);
?>