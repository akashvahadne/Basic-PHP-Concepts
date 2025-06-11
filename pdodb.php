<?php
$pdo=new PDO("mysql:host=localhost","root","");
if($pdo===false)
{
    echo "server not connect";
}
$sql="CREATE DATABASE pdo";
if($pdo->exec($sql))
{
    echo "server created";
}
else
{
    echo "failed";
}
unset($pdo);

?>