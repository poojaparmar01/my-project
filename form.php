<html>
<head>
<style>
body {
  
 background-color: whitesmoke;
 margin-top: 100px;
color: blue;

}

input
{
  
  width:250px;
  height:35px;
  border-color: whitesmoke;
  font-size: 20px;
 
}

.bg
{
    border-color: hotpink;
}









* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

.buttons {
    margin: 10%;
    text-align: center;
}

.btn-hover {
    width: 200px;
    font-size: 16px;
    font-weight: 600;
    color: #fff;
    cursor: pointer;
    margin: 20px;
    height: 55px;
    text-align:center;
    border: none;
    background-size: 300% 100%;

   
    moz-transition: all .4s ease-in-out;
    -o-transition: all .4s ease-in-out;
    -webkit-transition: all .4s ease-in-out;
    transition: all .4s ease-in-out;
}

.btn-hover:hover {
    background-position: 100% 0;
    moz-transition: all .4s ease-in-out;
    -o-transition: all .4s ease-in-out;
    -webkit-transition: all .4s ease-in-out;
    transition: all .4s ease-in-out;
}

.btn-hover:focus {
    outline: none;
}

.btn-hover.color-1 {
    background-image: linear-gradient(to right, #25aae1, #40e495, #30dd8a, #2bb673);
    box-shadow: 0 4px 15px 0 rgba(49, 196, 190, 0.75);
}

.f
{
  
  border:5px groove;
  width: 1100px;
  height: 1050px;
  border-color: white;
  background-color: white;
  padding-left: 20px;
  
}






</style>
</head>
<body>
 
 <form action="formaction.php" method="post" class="f">
        
        <?php
            $conn = mysqli_connect('localhost','root','','form');
            $sql = "SELECT * FROM company_name";
            $reslut1 = mysqli_query($conn,$sql);
          ?>

        <CENTER><H1>19/10 C FROM</H1></CENTER>


       COMPANY NAME:
        <select>
             <?php while ($row1 = mysqli_fetch_array($reslut1)):; ?>
                <option value ="$row[1]"><?php echo $row1[1]; ?></option>
             <?php endwhile; ?>
        </select>
      
      
         MEMBER NAME :<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="txt" name="ename" style="Width:300px" placeholder="MEMBER NAME"><br><br>
       
       UAN NUMBER :      <input type="txt" name="uan">&nbsp;&nbsp;&nbsp;
       
       MEMBER ID :    <input type="txt" name="mid">&nbsp;&nbsp;&nbsp;<br><br>
    
       PASSWORD :      <input type="txt" name="pwd"><br><br>
        
   
       AADHAR CARD NUMBER :     <input type="txt" name="aadhar">
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     
       PAN NUMBER      <input type="txt" name="pan"><br><br>
      
       DATE OF JOINING&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="date" name="doj">&nbsp;&nbsp;DATE OF EXIT&nbsp;&nbsp;&nbsp;<input type="date" name="date">
        <br><br>
        <input type="checkbox" name="chk1[]" value="MOBILE NUMBE NOT LINK WITH AADHAR CARD">MOBILE NUMBER NOT LINK WITH AADHAR CARD<br><br>

      
        <input type="checkbox" name="chk1[]" value="CHAQUE NAME NOT AS PER AADHAR CARD">CHAQUE NAME NOT AS PER AADHAR CARD<br><br>
    
        <input type="checkbox" name="chk1[]" value="EPF NAME NOT AS PER AADHAR">EPF NAME NOT AS PER AADHAR<br><br>
     
        <input type="checkbox" name="chk1[]" value="PAN CARD REQUIRED">PAN CARD REQUIRED</input><br><br>
     
        <input type="checkbox" name="chk1[]" value="NEED JOINT REQUEST">NEED JOINT REQUEST<br><br>
      
     
       <input type="checkbox" name="chk1[]" value="JOINT REQUEST UNDER PROCESS">JOINT REQUEST UNDER PROCESS
     
          
              <div class="buttons">

        
        <button class="btn-hover color-1">SUBMIT</button>
          

      </td>
</tr>
</table>
</form>
   
</body>
</html>