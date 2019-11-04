<?php
	include_once "conn.php";
	if(isset($_POST['update']))
	{
		$ma = $_GET['ID'];
		$name = $_POST['txtname'];
		$phone = $_POST['txtphone'];
		$email = $_POST['txtemail'];

		$query = "UPDATE ma SET name='".$name."',phone='".$phone."',email='".$email."'  WHERE idma='".$ma."'";
		$result = mysqli_query($con,$query);

		if($result) 
		{
			header('location:index.php');
		}
		else 
		{
			echo  " Vui lòng xem lại";
		}
	} 
	else 
	{
		header('location:index.php');
	}
 ?>