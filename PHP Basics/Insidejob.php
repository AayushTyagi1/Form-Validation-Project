<!DOCTYPE html>
<html>
<head>
	<title>Inside Job</title>
</head>
<body>
<?php
$num=array(8,25,45,60,168,500,999);
print_r($num);
?>

<?php 
echo "<br>";
echo current($num)."<br>";
next($num);
echo current($num)."<br>";
//to reset to start
reset($num);
echo current($num)."<br>";
//to move to end
end($num);
echo current($num)."<br>";
next($num);
echo current($num)."<br>";
?>
</body>
</html>