<html>
<?php
session_start();

 $con=mysqli_connect("localhost","root","");
 if(!$con)
  echo '<script type="text/javascript"> alert("Database connection error");</script>';
else
 {
	 
   $id = $_POST["username"] ;
   $pass = $_POST["password"] ;
   $_SESSION["id"]=$id;
   
   mysqli_select_db($con,"web_proj");
   $query="select * from admin where id=".$id." and password='".$pass."'";
   $res=mysqli_query($con,$query);
   if(mysqli_num_rows($res)==1)
      {
      $_SESSION['tid']=$id;
      header('Location:ApplicationStatus.php'); 
      echo "yes";
     }
     else
	echo "<script>alert('Enter Valid User Credentials');window.location.href = 'login.html';</script>";
 }
?>
</html>