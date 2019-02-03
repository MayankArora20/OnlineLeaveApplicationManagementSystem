<?php
session_start();
$con=mysqli_connect("localhost","root","");
 if(!$con)
  echo '<script type="text/javascript"> alert("Database connection error");</script>';
 else
 {
   mysqli_select_db($con,"web_proj");
   $appid=$_GET["id"];
   $_SESSION['appid']=$appid;
   $tid=$_SESSION['tid'];

  }
?> 
<html>
<head>
  <link rel="stylesheet" type="text/css" href="./css/viewApplication.css">
<script type="text/javascript">
  
  function viewButton()
  {
    if(<?php if ($_SESSION['status']=='pending') echo "true"; else echo "false";?>)
        {
          document.getElementById('1').style.visibility="visible";
          document.getElementById('2').style.visibility="visible";
        }
    else
      {
        document.getElementById('1').style.visibility="hidden";
        document.getElementById('2').style.visibility="hidden";
      }
  }
</script>
</head>
<body bgcolor="#fffacd" onload="viewButton()">

<center>
<div class="buttonContainer" >
 <input type="button" class="button" id="1" value="Approved" style="visibility: hidden;" onclick="window.location.href='approveQuery.php'">
 <input type="button" class="button" id="2" value="Decline" style="visibility: hidden;" onclick="window.location.href='declineQuery.php'">
</div>
</center>
<br/>
  
 <div id="inner">
 <?php
 



   $query="select * from application where applicationId='".$appid."'";
   if($result=mysqli_query($con,$query))
   
    if($row=mysqli_fetch_array($result))
          

   $query2="select name from admin where id='".$_SESSION['tid']."'";
   $res=mysqli_query($con,$query2);
   $roww=mysqli_fetch_array($res);
   $teacherN=$roww['name'];
   

   if(!empty($row['registration_num'])) 
   {  
    //student application
    $msg="<br>To,<br>$teacherN<br> of ".$row['course_job']." ".$row['sem']."sem<br>Of MNNIT Allahabad<br><br>Respected Sir/Mam,<br>This is to bring to your kindly notice that I, ".$row['name']." of ".$row['course_job']." of semester ".$row['sem']." is going on leave  from ".$row['fromDt']." to ".$row['tillDt']." because of ".$row['reason']."<br> &nbsp;&nbsp;&nbsp;Therefore, I request you to kindly grant me leave for above mention days.<br><br>Thanking you<br>Your Sincerely<br>".$row['name']."<br>".$row['registration_num']."<br>".$row['Address']."<br>";
    }
    else
      if(!empty($row['course_job']))
      {
        //non teaching staff application
        $msg="<br>To,<br>$teacherN<br>Of MNNIT Allahabad<br><br>Respected Sir/Mam,<br>This is to bring to your kindly notice that I, ".$row['name']." working as ".$row['course_job']." in CSED department would like to have leave  from ".$row['fromDt']." to ".$row['tillDt']." because of ".$row['reason']."<br> &nbsp;&nbsp;&nbsp;Therefore, I request you to kindly grant me leave for above mention days.<br><br>Thanking you<br>Your Sincerely<br>".$row['name']."<br>".$row['mobile']."<br>".$row['Address']."<br>";
      }
      else
      {
        //teachers application
        if($row['Substitute']=="No")
                   $msg =  "<br>To,<br>$teacherN<br>Of MNNIT Allahabad<br><br>Respected Sir/Mam,<br>This is to bring to your kindly notice that I, ".$row['name']." teacher of ".$row['course']." would like to have leave on/was on leave from ".$row['fromDt']." to ".$row['tillDt']." because of ".$row['reason']."<br>Therefore, I request you to kindly grant me leave for above mention days.<br><br>Thanking you<br>Your Sincerely<br>".$row['name']."<br>".$row['Address']."<br>".$row['mobile']."<br><br>For attachments visit site";
                    else
                      $msg =  "<br>To,<br>$teacherN<br>Of MNNIT Allahabad<br><br>Respected Sir/Mam,<br>This is to bring to your kindly notice that I, ".$row['name']."teacher of ".$row['course_job']." would like to have leave on/was on leave from ".$row['fromDt']." to ".$row['tillDt']." because of ".$row['reason']."On my behalf I have appointed ".$row['Substitute']." as substitute.<br>Therefore, I request you to kindly grant me leave for above mention days.<br><br>Thanking you<br>Your Sincerely<br>".$row['name']."<br>".$row['Address']."<br>".$row['mobile']."<br><br>For attachments visit site";
                   
      }
    echo "$msg";

    $q  = "SELECT doc1 FROM application where `applicationId` = '$appid'";
    $qd=mysqli_query($con,$q);
   $res=mysqli_fetch_array($qd);

  ?>
 </div>
 <br>
 <img src="<?php if($res) echo $res['doc1']; else echo 'no relades do'?>" alt="no related document"/>
</body>
</html>