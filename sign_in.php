<?php

$lUsername = $_POST['username'];
$lPassword = $_POST['nPassword'];

$servername="localhost";
$username="root";
$password="";
$dbname="hms";

$conn=new mysqli($servername,$username,$password,$dbname);

if(isset($_POST['Signin']))
{
	if (!$conn) 
	{
		die('Could not connect'.mysqli_connect_error());
	}
	$sql = "SELECT * FROM signup WHERE username='$lUsername' AND pass='$lPassword'";
	$result = mysqli_query($conn,$sql);

	if($row = mysqli_fetch_array($result))
	{
        session_start();

		include 'dashboard.html';
	}
	else
	{
		echo "<script>";
		echo "alert ('Incorrect Username or password')";
		echo "</script>";
		include 'sign_in.html';
	}
	$conn -> close();
}

?>