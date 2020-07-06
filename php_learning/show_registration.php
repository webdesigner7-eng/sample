<!DOCTYPE html>
<html>
<head>
	<title>Show Details</title>
</head>
<body>
	
	<h1 align="center">Student Details</h1>
	<table border="1" align="center" width="500em">
		<tr>
			<td>Enrollment No.</td>
			<td><?php  echo $_REQUEST['enroll']; ?></td>
		</tr>
		<tr>
			<td>First Name</td>
			<td><?php  echo $_REQUEST['fname']; ?></td>
		</tr>
		<tr>
			<td>Last Name</td>
			<td><?php  echo $_REQUEST['lname']; ?></td>
		</tr>
		<tr>
			<td>Father's Name</td>
			<td><?php  echo $_REQUEST['father_name']; ?></td>
		</tr><tr>
			<td>Mother's Name</td>
			<td><?php  echo $_REQUEST['mother_name']; ?></td>
		</tr><tr>
			<td>DOB</td>
			<td><?php  echo $_REQUEST['dob']; ?></td>
		</tr><tr>
			<td>Gender</td>
			<td><?php  echo $_REQUEST['gender']; ?></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><?php  echo $_REQUEST['email']; ?></td>
		</tr><tr>
			<td>Selected Course</td>
			<td><?php  echo $_REQUEST['course']; ?></td>
		</tr>
		<tr>
			<td>12th Passing year</td>
			<td><?php  echo $_REQUEST['passing_12']; ?></td>
		</tr><tr>
			<td>12th percentage</td>
			<td><?php  echo $_REQUEST['percentage_12']; ?></td>
		</tr><tr>
			<td>10th passing year</td>
			<td><?php  echo $_REQUEST['passing_10']; ?></td>
		</tr><tr>
			<td>10th percentage</td>
			<td><?php  echo $_REQUEST['percentage_10']; ?></td>
		</tr>
		<tr>
			<td colspan="2" align="center"> <input type="submit" name="print" value="print"></td>
		</tr>
	</table>	
</body>
</html>