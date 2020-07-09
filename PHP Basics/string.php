<!DOCTYPE html>
<html>
<head>
	<title>mypage</title>
</head>
<body>
<?php

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

<?php
$s1="your name is ";
$s2="aayush tyagi";
$s1.=$s2;
?><hr>
First letter upper:<?php echo ucfirst($s1);?><br>
All First letter upper:<?php echo ucwords($s1);?><br>
All letter upper:<?php echo strtoupper($s1);?><br>
all letter lower:<?php echo strtolower($s1);?><br>
<hr>

Repeat: <?php echo str_repeat($s1,3); ?><br>
Make String from one point to another:<?php echo substr($s1,5,10); ?><br>

Find position of any specific word:<?php echo strpos($s1,"name"); ?><br>

Find Character: <?php echo strchr($s1,"a"); ?><br>


<hr>
Total length:<?php echo strlen($s1);?><br>
TRIM <?php echo "A".trim(" BCD E";?><br>
find and replace <?php echo str_replace("aayush","aryan",$s1);?><br>
 

</body>
</html>