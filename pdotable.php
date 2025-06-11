<?php
$pdo = new PDO("mysql:host=localhost;dbname=pdo", "root", "");
try
{
$sql = "CREATE TABLE PDO_GGSP(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    F_Name VARCHAR(30) NOT NULL,
    L_Name VARCHAR(30) NOT NULL,
    email VARCHAR(30) NOT NULL UNIQUE
)";

$pdo->exec($sql);
}
catch (PDOException $e)
{
    echo "failed";
}
unset($pdo);
?>