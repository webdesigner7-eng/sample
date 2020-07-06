<?php
	$fname= $_GET['fname'];
	$lname= $_GET['lname'];
	$city=$_GET['city'];
	$contact=$_GET["contact"];

	print_r($_GET);	
?>
<!DOCTYPE html>
<html>
<head>
	<title>New Page</title>
</head>
<body>
<pre>
	<?php
		print_r($_GET);
		echo 'world ','war III<br>';
		echo ("hello ".$fname);
		if(is_numeric($contact))
		{
			echo "\nthank you for your contact no.\n ",$contact;
		}
		else
			echo "\nInvalid contact number";
	 ?>
</pre>
</body>
</html>

