<?php
// db Connection
	$con= mysqli_connect("localhost","root","");
	if(!$con)
	{
		echo"Not Connected to Server";
	}
	if(!mysqli_select_db($con, "php_db"))
	{
		echo "Not Selected Database";
	}
// db Connection end
	if(isset($_REQUEST['enroll']) && isset($_REQUEST['fname']) && isset($_REQUEST['lname']) && isset($_REQUEST['father_name']) && isset($_REQUEST['mother_name']) && isset($_REQUEST['dob']) && isset($_REQUEST['email']) && isset($_REQUEST['course']) && isset($_REQUEST['passing_12']) && isset($_REQUEST['percentage_12'])&& isset($_REQUEST['passing_10']) && isset($_REQUEST['percentage_10']))
	{
		$enroll=$_REQUEST['enroll'];
		$fname=$_REQUEST['fname'];
		$lname=$_REQUEST['lname'];
		$father_name=$_REQUEST['father_name'];
		$mother_name=$_REQUEST['mother_name'];
		$dob=$_REQUEST['dob'];
		$email=$_REQUEST['email'];
		$course=$_REQUEST['course'];
		$passing_12=$_REQUEST['passing_12'];
		$percentage_12=$_REQUEST['percentage_12'];
		$passing_10=$_REQUEST['passing_10'];
		$percentage_10=$_REQUEST['percentage_10'];

		$sql= "INSERT INTO student_registration(enroll,fname,lname,father_name,mother_name,dob,email,course,passing_12,percentage_12,passing_10,percentage_10) VALUES ('$enroll','$fname','$lname','$father_name','$mother_name',
		'$dob', '$email','$course','$passing_12','$percentage_12','$passing_10','$percentage_10')";
		mysqli_query($con,$sql);
		$con->close();
		echo $fname;
	}
?>