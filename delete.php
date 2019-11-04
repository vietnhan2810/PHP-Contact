<?php
	include_once 'conn.php';
	$ma = $_GET['ma'];
	$q = "DELETE FROM `ma` WHERE idma=$ma" ;
	mysqli_query($con,$q);
	header('location:index.php');
 ?>