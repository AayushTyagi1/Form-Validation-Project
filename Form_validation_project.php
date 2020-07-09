<?php
	$Name_error="";//Intially there must not be any error
	$Email_error="";
	$Gender_error="";
	$Website_error="";
if(isset(($_POST['Submit']))){

if(empty($_POST["Name"]))
{
	$Name_error="Name is required";
}
else
{
	$Name=Test_user_input($_POST["Name"]);
	if(!preg_match("/^[A-Za-z\. ]*$/", $Name))
		$Name_error="Only letters and white spaces are allowed";
}
if(empty($_POST["Email"]))
{
	$Email_error="Email is required";
}
else
{
	$Email=Test_user_input($_POST["Email"]);
	if(!preg_match("/[a-zA-Z \.0-9_]{3,}@[a-zA-Z \.]{3,}[.]{1}[a-zA-Z]{1,}/", $Email))
	$Email_error="Invalid Format";
}

if(empty($_POST["Gender"]))
{
	$Gender_error="Gender is required";
}
else
{
	$Gender=Test_user_input($_POST["Gender"]);
}

if(empty($_POST["Website"]))
{
	$Website_error="Website is required";
}
else
{
	$Website=Test_user_input($_POST["Website"]);
	if(!preg_match("/(https:|ftp:)\/\/[a-zA-Z0-9.\-_\/?\$=&\#\~`!]+\.[a-zA-Z0-9.\-_\/?\$=&\#\~`!]*/",$Website))
	$Website_error="Invalid";
}

if(!empty($_POST["Name"]) && !empty($_POST["Gender"]) && !empty($_POST["Email"]) && !empty($_POST["Website"]) ){
	if(empty($Website_error) && empty($Name_error) && empty($Email_error) && empty($Gender_error)){
echo "<h2>Your Information</h2>";
echo "Name: {$_POST["Name"]}.<br>";
echo "Email: {$_POST["Email"]}.<br>";
echo "Gender: {$_POST["Gender"]}.<br>";
echo "Website: {$_POST["Website"]}.<br>";

echo "Comment: {$_POST["Comment"]}.<br>";
}
else{
	echo '<span class="Error">Please input your Information agian</span>';
}
}
}
function Test_user_input($Data)
{
	return $Data;
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Form Validation Project</title>
	</head>
	<link rel="stylesheet" type="text/css" href="Form.css">
<body> 
<h2 class="title">Form Validation with PHP.</h2>

<form  action="Form_validation_project.php" method="post" id="form"> 
<legend>* Please Fill Out the following Fields.</legend>			
<fieldset>
Name:<br>
<input class="input" type="text" Name="Name" value="" placeholder="Your name ">*
<span class="Error"><?php echo $Name_error; ?></span>
<br>
E-mail:<br>
<input class="input" type="text" Name="Email" value="" placeholder="Your Email">*
<span class="Error"><?php echo $Email_error; ?></span>
<br>
Gender:<br>
<input class="radio" type="radio" Name="Gender" value="Female">Female
<input class="radio" type="radio" Name="Gender" value="Male">Male*
<span class="Error"><?php echo $Gender_error; ?></span>
<br>   
Website:<br>
<input class="input" type="text" Name="Website" value="" placeholder="Your Website link">*
<span class="Error"><?php echo $Website_error; ?></span>
<br>
Comment:<br>
<textarea Name="Comment" rows="5" cols="25" placeholder="Write Something"></textarea>
<br>
<br>
<input type="Submit" Name="Submit" value="Submit Your Information"><br>
   </fieldset><br>
</form>	    
	</body>
</html>
