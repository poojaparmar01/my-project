<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php
	  
	  $ename = $_POST['ename'];
	  $uan = $_POST['uan'];
	  $mid = $_POST['mid'];
	  $pwd = $_POST['pwd'];
	  $doj = $_POST['doj'];
	  $chkbox1 = $_POST['chk1'];
	  $chk = "";

	   foreach ($chkbox1 as $key => $chk1) {
	   	$chk .= $chk1.",";
	   }
	  
	   

 
  $conn = mysqli_connect('localhost','root','','form');
    
  
    

     $sql = "INSERT INTO `19_10form`(`uan`, `m_name`, `m_id`, `password`,`doj`, `chackbox`) VALUES ('$uan','$ename','$mid','$pwd', '$doj','$chk')";

      $result = mysqli_query($conn,$sql);
 		  if ($result){
     		echo "hi";
 			}
   

 			//header("location:home.php");
	?>

	


</body>
</html>