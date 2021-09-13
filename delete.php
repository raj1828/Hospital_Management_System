<?php

$patientId = $_POST['dId'];

$servername="localhost";
$username="root";
$password="";
$dbname="hms";

$conn=new mysqli($servername,$username,$password,$dbname);

if(isset($_POST['Delete'])) {
	if (!$conn) {
		die('Could not connect'.mysqli_connect_error());
	}
	
    $sql = "DELETE FROM dr_review WHERE ID = $patientId";

	if($conn->query($sql) == TRUE) {
		echo "<script>";
		echo "alert('Patient removed successfully.');";
		echo "</script>";
        include 'dashboard.html';
	} 
    else {
        include 'dashboard.html';
    }
	$conn -> close();
}

?>