<html>
<?php
 session_start();
 $con=mysqli_connect("localhost","root","");
 mysqli_select_db($con,"web_proj");
   $appid=$_SESSION["appid"];
   $tid=$_SESSION['tid'];

   $q="UPDATE link set status='approved' where appId ='".$appid."' and tid='".$tid."'";
   $res=mysqli_query($con,$q);
   if($res)
   {
     echo '<script>alert("approved"); window.location.href="ApplicationPending.php"</script>';

   }

?>
</html>