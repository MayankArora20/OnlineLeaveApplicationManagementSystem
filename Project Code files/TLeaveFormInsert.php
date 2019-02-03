<?php
session_start();
?>
<html>
<body>
<?php
$con=mysqli_connect("localhost","root","");
if(!$con)
 {
  die("database connection fail".mysqli_connect_error());
 }
 else
 {    
      mysqli_select_db($con,'web_proj');
      $name=$_POST["Name"];
      $course=$_POST["Course"];
      $from=$_POST["From"];
      $till=$_POST["To"];
      $reason=$_POST["Reason"];
      $add=$_POST["Personaladdress"];
      $mob=$_POST["Mobileno"];
      $email=$_POST["emailid"];
      $status="pending";
      $subs=$_POST['subst'];
       
      $chk=1;
      $sid;
      while($chk==1)
      {
       $rand=(string)rand(100,999);
       $s_id=$name."".$rand;

       $queryc="select name from application where applicationId ='".$s_id."'";
       $result=mysqli_query($con,$queryc);
       if($row=mysqli_fetch_array($result)==0)
         $chk=0;
     }
  
     
      $files=$_FILES['file1'];
      $filename=$files['name'];
      $fileerror=$files['error'];
      $filetmp=$files['tmp_name'];
      $fileext=explode('.',$filename);
      $filecheck=strtolower(end($fileext));
      $fileextstored=array('png','jpg','jpeg');

      
        $destination='upload/'.$filename;
        move_uploaded_file($filetmp,$destination);
          $q="INSERT INTO `application`(`applicationId`, `course_job`, `name`, `fromDt`, `tillDt`, `reason`, `mobile`, `email`, `Address`,`doc1`,`Substitute`) VALUES ('$s_id','$course','$name','$from','$till','$reason','$mob','$email','$add','$destination','$subs')";         
          $query=mysqli_query($con,$q);
      

          if($query)
          {
            $_SESSION["appID"]=$s_id;
            $message;


            if(in_array($filecheck,$fileextstored))
            {
               $q="UPDATE application SET doc1='$destination' WHERE applicationId='$s_id'";
                    $query=mysqli_query($con,$q);
                     
            } 

            $i=1;
              $id=$_POST[$i];
              if($id!='-1')
              {
                $q="INSERT INTO `link` (`tid`, `appId`) VALUES ('$id','$s_id')";
                $ressl=mysqli_query($con,$q);
                if($ressl)
                {
                   $query="select email,name from admin where id='".$id."'";
                   $res=mysqli_query($con,$query); 
                   $row=mysqli_fetch_array($res);

                   $to = $row['email'];
                   $subject = "Leave Application From $name, $course";
                    
                    $teacherN=$row['name'];
                    
                    if($subs=="No")
                   $message =  "To,\n$teacherN\nof MNNIT Allahabad\n\nRespected Sir/Mam,\n  This is to bring to your kindly notice that I, ".$name." teacher of ".$course."  would like to have leave on/was on leave from ".$from." to ".$till." because of ".$reason."\nTherefore, I request you to kindly grant me leave for above mention days.\n\nThanking you\nYour Sincerely\n".$name."\n".$add."\n".$mob."\n".$email."\n\n";
                    else
                      $message =  "To,\n$teacherN\nof MNNIT Allahabad\n\nRespected Sir/Mam,\n  This is to bring to your kindly notice that I, ".$name." teacher of ".$course."  would like to have leave on/was on leave from ".$from." to ".$till." because of ".$reason.". On my behalf I have ask ".$subs." to take class.\nTherefore, I request you to kindly grant me leave for above mention days.\n\nThanking you\nYour Sincerely\n".$name."\n".$add."\n".$mob."\n".$email."\n\n";
                   


                    //mail part 


                   //header for sender info
                    $headers = "From: MNNIT no-reply<no-reply@mnnit>";

                    //boundary 
                    $semi_rand = md5(time()); 
                    $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 

                    //headers for attachment 
                    $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 

                    //multipart boundary 
                    $msgg = "--{$mime_boundary}\n" . "Content-Type: text/plain; charset=\"UTF-8\"\n" .
                    "Content-Transfer-Encoding: 7bit\n\n".$message."\n\n"; 

                    //preparing attachment
                    if(!empty($destination) > 0){
                        if(is_file($destination)){
                            $msgg .= "--{$mime_boundary}\n";
                            $fp =    @fopen($destination,"rb");
                            $data =  @fread($fp,filesize($destination));

                            @fclose($fp);
                            $data = chunk_split(base64_encode($data));
                            $msgg .= "Content-Type: application/octet-stream; name=\"".basename($destination)."\"\n" . 
                            "Content-Description: ".basename($destination)."\n" .
                            "Content-Disposition: attachment;\n" . " filename=\"".basename($destination)."\"; size=".filesize($destination).";\n" . 
                            "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
                        }
                    }
                    $msgg .= "--{$mime_boundary}--";
                    $returnpath = "-f" . $from;
                    $message=$msgg;
                    //send email
                   




                   $retval = mail ($to,$subject,$message,$headers);

                   //review mail to student
                  $subject = "Leave Application Review";
                    
                  $mg="Below is the Review of Your Application And Also Note Down Your Application Id:".$s_id;

                  $m=$message;

                  $message=$mg."\n\n\n".$m;


                    $msgg = "--{$mime_boundary}\n" . "Content-Type: text/plain; charset=\"UTF-8\"\n" ."Content-Transfer-Encoding: 7bit\n\n".$message."\n\n"; 
                   
                   $message=$msgg;

                   mail ($email,$subject,$message,$headers);

                 header('location:ApplicationRegistered.php');
                }
              }
            
              
          }
    
   mysqli_close($con);
   }
?>
</body>
</html>