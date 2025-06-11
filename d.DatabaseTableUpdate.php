<?php


$con=mysqli_connect("localhost","root","","tyco");
if($con===false)
{
    die("ERROR:could not connect");
}

$sql="UPDATE stud SET  email='avahadne191@gmail.com' where id=1";

if(mysqli_query($con,$sql))
{
    echo "data updated";
}
else
{
    echo "failed";
}
mysqli_close($con);

?>