<?php
 $company = $_GET['company'];

 $con = mysqli_connect('localhost','root','','form');
 $sql = "INSERT INTO `19_10form`(`company`) VALUES ($company)";

 if ($reslut = mysqli_query($con,$sql)) {
 	// code...
 	echo "hi";
 }
?>