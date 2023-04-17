<!DOCTYPE html>
<html> 
<body>
<?php
$n = 10;
$sum = 0;
$prod = 1;
for($i =1; $i <= $n; $i++)
{
    echo $i. "\n";
}
echo "<br>";
for ($x = 0; $x <= $n; $x++){
    $sum = $sum + $x;
}
echo "n까지의 수를 더한값은? : $sum <br>";
for($x = 1; $x <= $n; $x++){
    $prod = $prod *$x;
}
echo "n까지의 수를 곱한값은? : $prod <br>";
?>
</body>
</html>