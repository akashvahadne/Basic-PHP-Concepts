<?php

$con=new PDO("mysql:host=localhost;dbname=employee","root","");

$sql="DELETE FROM emp WHERE id=5";

if($con->exec($sql))
{
	echo"record deleted";
}

else
{
	echo"not deleted";
}
unset($con);

?>