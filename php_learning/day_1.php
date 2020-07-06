<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="new.php" method="get">
		First name <input type="text" name="fname"><br>
		last name <input type="text" name="lname"><br>
		city<input type="text" name="city"><br>
		contact<input type="text" name="contact"><br>
		<input type="submit" name="submit" value="submit"><br>
	</form>
	<h2>Another Form</h2>
	<form action="new_post.php" method="post">
		<table border="1">
			<tr>
				<td>Email </td>
				<td><input type="text" name="email"><br></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="Password" name="pass"><br></td>
			</tr>
			<tr><td colspan="2"><input type="submit" name="submit" value="Done"></td></tr>
		</table>
	</form>

</body>
</html>

<?php
	echo "1. hello world from echo statement";

	echo "<hr>";

	echo ("2. hello world from echo function");

	echo "<hr>";

	printf("3. hello world from printf %f", 44.666);

	echo "<hr>";

	print("4. hello world from print");

	echo "<hr>";

	var_dump("\n5.hello world from var_dump");

	echo "<hr>";

	// die("6. hello world from die");

	exit("\n7. hello world");



