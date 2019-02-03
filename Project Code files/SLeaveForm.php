<?php
$con=mysqli_connect("localhost","root","");
 mysqli_select_db($con,'web_proj');
 $get=mysqli_query($con,"SELECT id, name FROM admin");
$option = '';

 while($row = mysqli_fetch_array($get))
{
  $option .= '<option value = '.$row['id'].'>'.$row['name'].'</option>';
}
?>

<html>
<head>
       

</head>
<body enctype="multipart/form-data" bgcolor="blue" bolder="5" onload="hide()">
<script type="text/javascript" src="js/scrs.js">


</script>
<form action="SLeaveFormInsert.php" method="POST" name="StudentRegistration"  enctype="multipart/form-data" onsubmit="return Validatefun()">

<table cellpadding="2" width="50%" border="10" align="center" cellspacing="3" bgcolor="#FFFFBE" style="font-size: 2vw;">

<tr>
    <td colspan=2>
      <center><font-size=3vw><b>Student Leave Form</b></font></center>
    </td>
</tr>

<tr height="10">
     <td >Name</td>
      <td><input type=text name=Name id="Name" size="30" onkeyup='ValidateNam();'>
    <div id="name_error"></div></td>
</tr>



<tr>
     <td>Registration Number</td>
<td><input type="text" name="registration" id="registration" size="30" onkeyup='Validatereg();'>
<div id="reg_error"></div></td>
</tr>



<tr>
<td>Personal Address</td>
<td><input type="text" name="Personaladdress"
id="personaladdress" size="30" onkeyup='Validateper();' >
<div id="per_error"></div></td>
</tr>




<tr>
    <td>Course</td>
          <td><select name="Course" id="Course">
                <option value="-1" selected>select..</option>
                <option value="B.Tech">B.TECH</option>
                <option value="MCA">MCA</option>
                <option value="MBA">MBA</option>
               
          </select>
      <div id="cor_error"></div></td>
</tr>

<tr>
     <td>Semester</td>
         <td><select name="Semester" id="Semester">
             <option value="-1" selected>select..</option>
             <option value="1">First</option>
             <option value="2">Second</option>
             <option value="3">Third</option>
             <option value="4">Fourth</option>
             <option value="5">Fifth</option>
             <option value="6">Sixth</option>
             <option value="7">seventh</option>
             <option value="8">eight</option>
         </select><div id="sem_error"></div></td>

</tr>


<tr>
   <td>From Date</td>
       <td><input type="text" name="From" id="From" size="30" placeholder="yyyy-mm-dd" onkeyup='Validatefrom();'>
   <div id="from_error"></div>  </td>

</tr>

<tr>
   <td>To Date</td>
       <td><input type="text" name="To" id="To" size="30" placeholder="yyyy-mm-dd" onkeyup='Validateto();'>
     <div id="to_error"></div> </td>

</tr>
<tr>
   <td>EmailId</td>
       <td><input type="text" name="emailid" id="emailid" size="30" onkeyup='Validateemail();'>
     <div id="email_error"></div></td>
</tr>

<tr>
   <td>MobileNo</td>
        <td><input type="text" name="Mobileno" id="Mobileno" size="30" onkeyup='Validatemob();'>
  <div id="mob_error"></div>  </td>
</tr>

<tr>
  <td>Reason</td>
     <td><textarea rows="3" cols="23" name="Reason" id="Reason" onkeyup='Validatereason();'></textarea><div id="reas_error"></div></td>
</tr>
<tr>
     <td> Select the teachers to whom you want to sent application</td>
         <td>
       <select name="1" id="1" onchange='Validater();'>
             <option value="-1" selected>select..</option>
             <?php echo $option; ?>
       </select><div id="c_error"></div>

       <select name="2" id="2"  >
            <option value="-1" selected>select..</option>
             <?php echo $option; ?>
       </select>      
      
         <select name="3" id="3" >
           <option value="-1" selected>select..</option>
             <?php echo $option; ?>
       </select>      
    
       <select name="4" id="4"  >
         <option value="-1" selected>select..</option>
             <?php echo $option; ?>
       </select>      
        <select name="5" id="5" >
          <option value="-1" selected>select..</option>
             <?php echo $option; ?>
       </select>      
     <div id="sel_error"></div>
     </td>

</tr>

<tr>
  <td><label>Medical(optional)<label></td>
  <td><input type="file" name="file1" value="fileupload1" id="file1"></td>
</tr>


<tr>
<td><input type="reset"></td>
<td colspan="2"><input type="submit" id="submit" value="submit" name="submit"></td>
</tr>

</table>
</form><br><br>
</body>
</html>
