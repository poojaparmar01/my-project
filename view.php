<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title></title>
  <style type="text/css">
  th
  {
    background-color: #333;
    color: #ffffff;

  }
th,td
{
  padding: 12px 12px;
  font-size: 1.4rem;
  }
  table
  {
    position: absolute;
    z-index: 2;
    left: 50%;
    top: 20%;
    transform: translate(-50%,-50%);
    width: 60%;
    height: 100px;
    border-collapse: collapse;
    border-radius: 12px 12px 0 0;
    background-color: #fafafa;
  }
  tr:nth-child(odd)
  {
      background-color: #E8E9EB;

  }
  .gray-color {
    color:grey;
  </style>
  <script type="text/javascript">
    function view() {
      // body...


      return confirm('Are you sure you want to delete this..?');
    }

</script>

</head>
<body>

<?php
  $conn = mysqli_connect('localhost','root','','form');
  $sql = "SELECT * FROM 19_10form";

if($reslut = mysqli_query($conn,$sql))
{
  if($row = mysqli_num_rows($reslut)>0)
  {
    
      echo "<table>";
            echo "<tr>";
                echo "<th>COMPANY</th>";
                echo "<th>UAN NUMBER</th>";
                echo "<th>NAME</th>";
                echo "<th>MEMBER ID</th>";
                echo "<th>PASSWORD</th>";
                echo "<th>PROBLEM</th>";
                echo "";
                echo "</tr>";
            while($row = mysqli_fetch_array($reslut)) {  
                echo "<tr>";
                echo "<td>" . $row['company'] . "</td>";
                echo "<td>" . $row['uan'] . "</td>";
                echo "<td>" . $row['m_name'] . "</td>";
                echo "<td>" . $row['m_id'] . "</td>";
                echo "<td>" . $row['password'] . "</td>";
                $doj1 = strtotime($row['doj']);
                $doj =date('d-m-Y',$doj1);
                echo "<td>" . $doj. "</td>";
                echo "<td>" . $row['chackbox'] . "</td>";
                echo "<td> <a href='form.php'>  <button ><i class='fa fa-eye gray-color' style='font-size:20px' onclick='view()'></a></i></button></td>";
                echo "<td> <a href='form.php'>  <button><i class='fa fa-trash-o' style='font-size:20px' onclick='view()'></a></i></button></td>";
                echo "";

                

               
             


            //"INSERT INTO `19_10form`(`uan`, `m_name`, `m_id`, `password`, `company`, `checkbox`) VALUES ('$uan','$ename','$mid','$pwd','$cname','$chk')";

    
  }

}

echo "</table>";


}

?>

</body>
</html>
