<?php

$pdo=new PDO("mysql:host=localhost;dbname=pdo","root","");

$sql="SELECT * FROM pdo_ggsp";
$res=$pdo->query($sql);
if($res->rowcount() > 0){
	echo"<table>";
	echo"<tr>";
	echo"<th>First_name</th>";
	echo"<th>Last_name</th>";
	echo"<th>Email</th>";
	echo"</tr>";

while($row=$res->fetch()){
	echo"<tr>";
	echo"<td> ".$row['F_Name']." </td>";
	echo"<td> ".$row['L_Name']." </td>";
	echo"<td> ".$row['email']." </td>";
	echo"</tr>";
	}
	echo"</table>";

unset($res);
}

else{
	echo"No record";
}

unset($con);

?>