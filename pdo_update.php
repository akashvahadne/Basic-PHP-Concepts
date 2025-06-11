<?php

$con=new PDO("mysql:host=localhost;dbname=employee","root","");

$sql="UPDATE emp SET email='aaa@millionair.com' WHERE id=3";

if($con->exec($sql))
{
	echo "record updated";
}

else
{
	echo "not updated";
}
unset($con);

?>