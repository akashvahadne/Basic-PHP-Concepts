<?php 

$con=mysqli_connect("localhost","root","");
if($con===false)
{
    die("ERROR:could not connect");
}
$sql="CREATE DATABASE tyco";
if(mysqli_query($con,$sql))
{
    echo "Database created successfully.";
}
else
{
    echo "Unable to create database.";
}
mysqli_close($con);
?>