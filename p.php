<?php

 $conn = mysqli_connect('localhost','root','','form');


 $sql = "INSERT INTO `19_10form`(`uan`, `m_name`, `m_id`, `password`) VALUES ('102547896304','ABC','10025','ABCD123')";
 $result = mysqli_query($conn,$sql);
 if ($result){
     echo "ok done";
 }
 ?>