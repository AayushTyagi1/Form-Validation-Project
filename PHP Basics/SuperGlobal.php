<!DOCTYPE html>
<html>
<head>
	<title>Super GLobal Variable</title>
</head>
<body>
<?php
$x = 75;
$y= 23;
function addition(){
	$GLOBALS['z']=$GLOBALS['x'] + $GLOBALS['y'];
}
addition();
echo $z;
echo "<br>";
print_r($GLOBALS);
?>
</body>
</html>