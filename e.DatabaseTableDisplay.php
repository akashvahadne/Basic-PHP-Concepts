<?php


$con=mysqli_connect("localhost","root","","tyco");
if($con===false)
{
    die("ERROR:could not connect");
}

$sql="SELECT * FROM stud";
$result=mysqli_query($con,$sql);

foreach($result as $r)
{
    echo $r["id"]." ".$r["first_name"]." ".$r["last_name"]." ".$r["email"];
    echo "<br>";
}
// if($result=mysqli_query($con,$sql))
// {
//     if(mysqli_num_rows($result)>0)
//     {
//         echo "<TABLE border=2>";
//         echo "<tr>";
//         echo "<th>id</th>";
//         echo "<th>first_name</th>";
//         echo "<th>last_name</th>";
//         echo "<th>email</th>";
//         echo "</tr>";
//         while($row=mysqli_fetch_array($result))
//         {
//             echo "<tr>";
//             echo "<td>".$row["id"]."</td>";
//             echo "<td>".$row["first_name"]."</td>";
//             echo "<td>".$row["last_name"]."</td>";
//             echo "<td>".$row["email"]."</td>";
//             echo "</tr>";
//         }
//         echo "</TABLE>";
//         mysqli_free_result($result);
//     }
//     else
//     {
//         echo "no records found";
//     }
    
    
// }
// else
//     {
//         echo "ERROR:could not able to execute $sql";
//     }

mysqli_close($con);

?>