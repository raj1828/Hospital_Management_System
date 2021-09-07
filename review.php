<?php

	$p_name=$_POST['name'];
	$p_id=$_POST['pid'];
	$p_date=$_POST['date'];
	$p_time=$_POST['time'];
	$p_symptoms=$_POST['symptoms'];
	$p_reports=$_POST['reports'];
	$p_prescriptions=$_POST['prescription'];


	$servername="localhost";
	$username="root";
	$password="";
	$dbname="hms";

	$conn=new mysqli($servername,$username,$password,$dbname);

	if(isset($_POST['Review']))
	{
		if (!$conn)
		{
			die('Could not connect'.mysqli_connect_error());

		}
		$sql= "insert into dr_review(Name,ID,Date,Time,Symptoms,Reports,Prescription) values ('$p_name', '$p_id', '$p_date', '$p_time', '$p_symptoms', '$p_reports', '$p_prescriptions')";
		if($conn->query($sql) == true )
		{
			echo "<script>";
			echo "alert ('Your account was created successfully.')";
			echo "</script>";
			include 'dashboard.html';
		}
		else
		{
			echo "Error!".$conn->error;
		}
		$conn->close();
	}

	// if(isset($_POST['ViewData']))
	// {
	// 	if (!$conn)
	// 	 {
	// 		die('Could not connect'.mysqli_connect_error());
	// 	}
	// 	$sql="select * from customer";
	// 	$retval=mysqli_query($conn,$sql);
	// 	if($row=mysqli_fetch_array($retval))
	// 	{
	// 		echo "<br>Customer Name : ".$row["customer_name"]."<br>Account Number : ".$row["account_no"]."<br>Customer Age : ".$row["customer_age"]. "<br>Ammount retrieved : ".$row["customer_salary"];
	// 	}
	// 	else
	// 	{
	// 		echo "Error!".$conn->error;
	// 	}
	// 	$conn->close();
		
	// }


?>