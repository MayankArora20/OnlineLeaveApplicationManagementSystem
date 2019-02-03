<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en-US">
   <head>
      <link rel="stylesheet" type="text/css" href="css/LeaveFormChooser.css">

   </head>
   <body class="size-1140">
            <!--our code-->
            <div style="background-color: white; width: 80%; margin-left: 10%; margin-right: 10%; box-shadow: 10px 10px 20px black; margin-top: 3%; margin-bottom: 3%; border-radius: 15px; ">
            <h2 style="text-align:center; font-size: 2vw;">     Your application has been sent to respected persons    </h2><br/>
     <h2 style="text-align:center; font-size: 2vw;" >PLEASE NOTE DOWN YOUR APPLICATION ID <?php echo $_SESSION['appID']  ?></h2>
      <h2 style="text-align:center; font-size: 2vw;"> A review of your application is also send to your email<br>To check your application status please click On <a href="viewStatus.php">click here</a><br>
  Thank you.</h2>
</div>

            <!--our code-->
      </body>
</html>