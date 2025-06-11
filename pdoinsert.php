<?php
$pdo = new PDO("mysql:host=localhost;dbname=pdo", "root", "");
if($pdo===false)
{
    echo "connection failed";
}
try
{
$sql="INSERT INTO pdo_ggsp(F_Name,L_Name,email) VALUES ('Anish','Shewale','abc@gmail.com')"; 
$pdo->exec($sql);
}
catch (PDOException $e)
{
    echo "failed";
}
unset($pdo);
?>