<?php


$con=mysqli_connect("localhost","root","","tyco");
if($con===false)
{
    die("ERROR:could not connect");
}

$sql="insert into stud(first_name,last_name,email)values('Akash1','Vahadne1','avahadne20041@gmail.com')";

if(mysqli_query($con,$sql))
{
    echo "data inserted";
}
else
{
    echo "failed";
}

mysqli_close($con);

?>