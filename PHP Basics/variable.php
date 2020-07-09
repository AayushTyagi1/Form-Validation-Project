<!DOCTYPE html>
<html>
<head>
	<title>mypage</title>
</head>
<body>
<?php
$name = "Aayush";
echo"name";
echo"<br>";
$age = 20;
echo $age;
echo"<br>";
$a=3;
$b=4;
$c=$a+$b;
echo $c;
echo"<br>";
//Constants

define("PI",3.14);
echo "Value of PI".PI;

//String

echo "My name is 'Aayush Tyagi' <br>";
$color="Red";
$shirt = "sleev-less";
$combination = $color." ".$shirt."<br>";
echo $combination;
//"" vs ''
echo "$color is my fav<br>";

echo '$color is my fav<br>';
echo"{$color}is my fav<br>";


?>
</body>
</html>