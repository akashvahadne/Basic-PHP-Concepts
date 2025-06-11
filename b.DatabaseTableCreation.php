<?php


$con=mysqli_connect("localhost","root","","tyco");
if($con===false)
{
    die("ERROR:could not connect");
}

$sql="CREATE TABLE stud(
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
first_name VARCHAR(30) NOT NULL,
last_name VARCHAR(30) NOT NULL,
email VARCHAR(70) NOT NULL UNIQUE)";


if(mysqli_query($con,$sql))
{
    echo "Table created";
}
else
{
    echo "failed";
}
mysqli_close($con);

?>