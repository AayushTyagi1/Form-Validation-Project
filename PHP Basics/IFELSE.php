<!DOCTYPE html>
<html>
<head>
	<title>Inside Job</title>
</head>
<body>
<?php
echo "IFELSE";
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
reset($num);
for($i=0;$i<7;$i++)
{
	if(fmod(current($num),2))
	{
		echo current($num)."<br>";
		
	}
	next($num);
}
$a=4;
while($a!=0)
{
	echo"BETTER";
	$a--;
}
foreach($num as $value)
{
	if($value==60) continue;
	echo "value is $value <br>";
	if($value==500) break;
}
$a=1;

switch($a)
{
	case 1:
	echo "ONE";
	break;
	case 2:
	echo "TWO";
	break;
	default:
	echo"NONE";
}

?>
</body>
</html>