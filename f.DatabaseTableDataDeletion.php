<?php


$con=mysqli_connect("localhost","root","","tyco");
if($con===false)
{
    die("ERROR:could not connect");
}

// $sql="DELETE FROM stud WHERE id=3";
$sql="DELETE FROM stud WHERE first_name='Akash'";


if(mysqli_query($con,$sql))
{
    echo "data deleted";
}
else
{
    echo "failed";
}
mysqli_close($con);

?>