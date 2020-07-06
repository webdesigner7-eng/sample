<!DOCTYPE html>
<html>
<head>
	<title>Student Registration Form</title>
</head>
<body>
	<h1 align="center">Student Registration Form</h1>
	<form method="post"  action="show_registration.php" >
		<table align="center">
		<tr>
			<td>Enrollment No.</td>
			<td><input type="text" name="enroll" required="required"></td>
		</tr>
		<tr>
			<td>First Name</td>
			<td><input type="text" name="fname" required="required"></td>
		</tr>
		<tr>
			<td>Last Name</td>
			<td><input type="text" name="lname" required="required"></td>
		</tr>
		<tr>
			<td>Father's Name</td>
			<td><input type="text" name="father_name" required="required"></td>
		</tr>
		<tr>
			<td>Mother's Name</td>
			<td><input type="text" name="mother_name" required="required"></td>
		</tr>
		<tr>
			<td>DOB</td>
			<td><input type="date" name="dob" required="required"></td>
		</tr>
		<tr>
			<td>Gender</td>
			<td><input type="radio" name="gender" value="Female" checked="checked">Female <input type="radio" name="gender" value="Male">Male <input type="radio" name="gender" value="Others" >Others</td>

		</tr>
		<tr>
			<td>Email</td>
			<td><input type="text" name="email" required="required"></td>
		</tr>
		<tr>
			<td>Course</td>
			<td><select name="course">
				<option>MCA</option>
				<option>MBA</option>
				<option>M.tech</option>
				<option>BCA</option>
				<option>Bsc</option>
				<option>B.com</option>
			</select></td>
		</tr>
		<tr>
			<td>12th Passing year</td>
			<td><input type="text" name="passing_12" required="required"></td>
		</tr>
		<tr>
			<td>12th Percentage</td>
			<td><input type="number" name="percentage_12" required="required"></td>
		</tr>
		<tr>
			<td>10th Passing year</td>
			<td><input type="text" name="passing_10" required="required"></td>
		</tr>
		<tr>
			<td>10th Percentage</td>
			<td><input type="number" name="percentage_10" required="required"></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="btn_register" value="Register"></td>
		</tr>
	</table>
	</form>
</body>
</html>