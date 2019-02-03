<?php
session_start();
$_SESSION['status']='pending';
$tid=$_SESSION['tid'];
$con=mysqli_connect("localhost","root","");
if(!$con)
 {
 	die("database connection fale".mysqli_connect_error());
 }
 else
 {    
      mysqli_select_db($con,'web_proj');
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<h1><center>Pending</center></h1>

<body bgcolor="#fffacd">
	<script type="text/javascript">
	function send(x)
	{
     window.location.href ="viewApplication.php?id="+x;
	}
</script>
<center>
<table style ="width:60%;margin:auto; padding:2px;" border="5" bgcoclor="blue">
	
	<tr>
		<th><h3>Name</h3></th>
		<th><h3>Course/JOB</h3></th>
		<th><h3>Semester</h3></th>
		<th><h3>Select</h3></th>
	</tr>
	</html>
<?php
$con=mysqli_connect("localhost","root","","web_proj");
if(!$con)
{
	echo"Data Base Connection failed";
}
$query1="select appId from link where status ='pending' and tid='".$tid."'";
$res=mysqli_query($con,$query1);
while($rw=mysqli_fetch_array($res))
{
 $query="select applicationId,name,course_job,sem from application where applicationId='".$rw['appId']."'";
 $result=mysqli_query($con,$query);
 while($row=mysqli_fetch_array($result))
 { 
	echo"<tr>";
	echo"<td>".$row['name']."</td>";
	echo"<td>".$row['course_job']."</td>";
	echo"<td>".$row['sem']."</td>";
	$sa=$row['applicationId'];
	echo "<td> <button type='button' onclick='send(`$sa`)'>View</button></td>";
	echo"</tr>";
 }
}
?>
</table>
</center>
</body>
</html>