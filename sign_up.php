<?php


    $uEmail = $_POST['email'];
    $uUsername = $_POST['username'];
    $uPhone = $_POST['phone'];
    $uPass = $_POST['pass'];
    $cPass = $_POST['cpass'];

    $servername="localhost";
    $username="root";
    $password="";
    $dbname="hms";

    $conn=new mysqli($servername,$username,$password,$dbname);

    if(isset($_POST['Signup']))
{
	if (!$conn) 
	{
		die('Could not connect'.mysqli_connect_error());
	}
		
	if($uPass == $cPass)
	{
		$sql = "INSERT INTO `signup` (`email`, `username`, `phoneNum`, `pass`, `dt`) VALUES ('$uEmail', '$uUsername', '$uPhone', '$uPass', current_timestamp())";
	}
	else
	{
		die('Confirm Password was Incorrect');
		include 'sign_in.html';
	}

	if($conn->query($sql) == TRUE)
	{
		echo "<script>";
		echo "alert ('Your account was created successfully. Please login to continue.')";
		echo "</script>";
		include 'sign_in.html';
	}
	else
	{
		include 'sign_in.html';
	}
	
	$conn -> close();
}

?>