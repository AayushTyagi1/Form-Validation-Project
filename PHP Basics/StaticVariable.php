<!DOCTYPE html>
<html>
<head>
	<title>Static Variable</title>
</head>
<body>
<?php
function normalV(){
	$val=1;
	echo $var."<br>";
	$val++;
}
normalV();
normalV();
normalV();
function staticV(){
	static $b=5;
	$b++;
	echo $b;
}

?>
</body>
</html>