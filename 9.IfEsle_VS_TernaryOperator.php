<html>

<body>

<?php

$score=40;

if ($score>=50){

echo "The result is pass" . "\n";

echo "congratulations" . "\n";

}

else{

echo "The result is Fail". "\n";

echo "Better luck next time" . "\n";

}


$score=40;
echo "<br><br>";
print($score>=50) ? "The result is pass congratulations" : "The result is Fail Better luck next time "
?>

</body>

</html>