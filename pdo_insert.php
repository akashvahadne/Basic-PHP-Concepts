<?php

$p=new PDO("mysql:host=localhost;dbname=employee","root","");

$sql="INSERT INTO emp (id,name,email)VALUES(5,'CCC','ccc@gamer.com')";

if($p->exec($sql))
{
	echo"record inserted";
}

else
{
	echo"not inserted";
}
unset($p);

?>