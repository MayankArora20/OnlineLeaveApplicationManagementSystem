<?php
session_start();

$con=mysqli_connect("localhost","root","");
if(!$con)
 {
 	die("database connection fale".mysqli_connect_error());
 }
 else
 {    
      mysqli_select_db($con,'web_proj');

      $t_id=$_POST["t_id"];
      $name=$_POST["Name"];
      $reg=$_POST["registration"];
      $course=$_POST["Course"];
      $sem=$_POST["Semester"];
      $from=$_POST["From"];
      $till=$_POST["To"];
      $reson=$_POST["Reason"];
      $add=$_POST["Personaladdress"];
      $mob=$_POST["Mobileno"];
      $email=$_POST["emailid"];
      $status=$_POST["status"];
      
      $regs=(string)$reg;
      $teac=(string)$t_id;
      $rand=(string)rand(100,999);
      $s_id=$regs."".$rand."".$teac;
     
      $files=$_FILES['file1'];
      $filename=$files['name'];
      $fileerror=$files['error'];
      $filetmp=$files['tmp_name'];
      $fileext=explode('.',$filename);
      $filecheck=strtolower(end($fileext));
      $fileextstored=array('png','jpg','jpeg');

      if(in_array($filecheck,$fileextstored))
      {
      	$destination='upload/'.$filename;
      	move_uploaded_file($filetmp,$destination);
          $q="INSERT INTO `application`(`applicationId`, `TeacherId`, `course_job`, `sem`, `name`, `registration_num`, `fromDt`, `tillDt`, `reason`, `mobile`, `email`, `Address`, `status`,`doc1`) VALUES ('$s_id','$t_id','$course','$sem','$name','$reg','$from','$till','$reson','$mob','$email','$add','$status','$destination')";         
          if($query=mysqli_query($con,$q))
          {
            $_SESSION["appID"]=$s_id;
            header(location:ResponseApplication.php);
          }
      }	
    
   mysqli_close($con);
   }
?>