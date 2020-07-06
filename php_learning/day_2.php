<?php
	if(isset($_REQUEST['a']) && isset($_REQUEST['b']) && isset($_REQUEST['operation']))
	{
		$a=$_REQUEST['a'];
		$b= $_REQUEST['b'];
		$operation=$_REQUEST['operation'];
	}
	else{
		$a=0;
		$b=0;
		$operation='+';
	}

	if($operation=='Addition')
	{	$result =$a+$b; }	
	elseif($operation =='Substraction')
	{	$result=$a-$b;	}	
	elseif ($operation=='Multiplication') {
		$result=$a*$b;
	}
	elseif ($operation=='Division') {
		$result=$a/$b;
	}
	elseif ($operation=='Modul') {
		$result=$a%$b;
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>day-2 calculator</title>
</head>
<body>
	<form method="get">
		value of a: <input type="text" name="a" id="a" value="<?php echo $a ?>"><br>
		value of b: <input type="text" name="b" id="b" value="<?php echo $b ?>"><br>
		<label>Operation:  <input type="radio" name="operation" <?php if($operation=='Addition') echo 'checked';?> value="Addition">Addition</label><br>
		<label><input type="radio" name="operation" <?php if($operation == 'Substraction') echo 'checked';?> value="Substraction">Substraction</label><br>
		<label><input type="radio" name="operation" <?php if($operation == 'Multiplication') echo 'checked';?> value="Multiplication">Multiplication</label><br>
		<label><input type="radio" name="operation" <?php if($operation == 'Division') echo 'checked';?> value="Division">Division</label><br>
		<label><input type="radio" name="operation" <?php if($operation == 'Modul') echo 'checked';?> value="Modul">Modul</label><br>
		RESULT<input type="text" name="b" id="b" disabled value="<?php echo $result ?>"><br>
		<input type="submit" name="btn" value="Calculate">
	</form>
</body>
</html>