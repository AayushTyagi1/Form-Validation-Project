<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$food=array("PIZZA","BURGER",array("10","20","30"),"macroni",10);
echo $food[2][1];
$food[50]="paneer";
echo print_r($food);

?>

<hr>

<?php
$color=array("A"=>"40","B"=>"50","C"=>70);
echo $color["B"];
echo $color["A"].$color["C"];
print_r($color);
?>

<hr>
<?php
$num=array(8,4,1,6,2,9,5,3);
echo count($num);echo "<br>";
echo max($num);echo "<br>";
echo sort($num);echo "<br>";
print_r($num);
echo rsort($num);echo "<br>";
echo in_array(5,$num);echo "<br>";
$str=array("I","will","do","it");
echo implode(" ",$str);
$name="my name is aayush tyagi";
print_r(explode(" ",$name));



?>
</body>
</html>