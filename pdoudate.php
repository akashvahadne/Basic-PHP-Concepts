<?php
$pdo = new PDO("mysql:host=localhost;dbname=pdo", "root", "");
if($pdo===false)
{
    echo "connection failed";
}
try
{
$sql="UPDATE PDO_GGSP SET email='ansih123@gmail.com' WHERE id=1";

$pdo->exec($sql);
}
catch (PDOException $e)
{
    echo "failed";
}
unset($pdo);
?>