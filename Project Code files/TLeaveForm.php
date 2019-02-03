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
  <script type="text/javascript" src="js/tleave.js"></script>
</head>
<body bgcolor="blue" bolder="5" onload="hide()">
<form action="TLeaveFormInsert.php" method="POST" name="StudentRegistration"  enctype="multipart/form-data" onsubmit="return Validatefun()">

<table cellpadding="2" width="50%" border="10" align="center" cellspacing="3" bgcolor="#FFFFBE" style="font-size: 2vw;">

<tr>
    <td colspan=2>
      <center><font-size=3vw><b>Teacher Leave Form</b></font></center>
    </td>
</tr>

<tr>
     <td>Name</td>
      <td><input type=text name=Name id="Name" size="30" onkeyup='ValidateNam();'>
    <div id="name_error"></div></td>
</tr>

<tr>
<td>Personal Address</td>
<td><input type="text" name="Personaladdress"
id="personaladdress" size="30" onkeyup='Validateper();' >
<div id="per_error"></div></td>
</tr>


<tr>
    <td>Teacher Of</td>
          <td><textarea id="Course" name="Course" rows="3" cols="23" onkeyup='ValidateTeach();'></textarea>
            <div id="cor_error"></div></td>
</tr>

<tr>
    <td>Found Substitute to work<br> On your Behalf</td>
          <td><select name="substitute" id="substitute" onchange="subs()">
                <option value="0" selected>No</option>
                <option value="1">Yes</option>
          </select>
          <input type="subst" name="subst" id="subst" value="No" size="30" style="visibility: hidden;" onkeyup="ValidateSubs();">
          <div id="sub_error"></div></td>
</tr>


<tr>
   <td>From Date</td>
        <td><input type="text" placeholder="yyyy-mm-dd" name="From" id="From" size="30"onkeyup='Validatefrom()'>
     <div id="from_error"></div>  </td>

</tr>

<tr>
   <td>To Date</td>
       <td><input type="text" name="To" placeholder="yyyy-mm-dd" id="To" size="30" onkeyup='Validateto();'>
     <div id="to_error"></div></td>

</tr>
<tr>
   <td>EmailId</td>
       <td><input type="text" name="emailid" id="emailid" size="30"onkeyup='Validateemail();'>
     <div id="email_error"></div></td>
</tr>

<tr>
   <td>MobileNo</td>
        <td><input type="text" name="Mobileno" id="Mobileno" size="30"onkeyup='Validatemob();'>
   <div id="mob_error"></div> </td>
</tr>

<tr>
  <td>Reason</td>
     <td><textarea rows="3" cols="23" name="Reason" id="Reason" onkeyup='Validatereason();'></textarea><div id="reas_error"></div></td>
</tr>
<tr>
     <td> Select the person to whom you want to sent application</td>
         <td>
       <select name="1" id="1" >
             <option value="-1" selected>select..</option>
             <?php echo $option; ?>
       </select>
     
     </td>

</tr>

<tr>
  <td><label>Medical(optional)<label></td>
  <td><input type="file" name="file1" value="fileupload1" id="file1"></td>
</tr>


<tr>
<td><input type="reset"></td>
<td colspan="2"><input type="submit" value="submit" name="submit" onclick="formValidation()"/></td>
</tr>

</table>
</form><br><br>
</body>
</html>