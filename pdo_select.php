<?php

$con=new PDO("mysql:host=localhost;dbname=info","root","");

$sql="SELECT * FROM stud";
$res=$con->query($sql);
if($res->rowcount() > 0){
	echo"<table>";
	echo"<tr>";
	echo"<th>id</th>";
	echo"<th>first_name</th>";
	echo"<th>last_name</th>";
	echo"<th>roll_no</th>";

while($row=$res->fetch()){
	echo"<tr>";
	echo"<td> ".$row['id']." </td>";
	echo"<td> ".$row['first_name']." </td>";
	echo"<td> ".$row['last_name']." </td>";
	echo"<td> ".$row['roll_no']." </td>";
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