<?php
session_start();
$_SESSION['status']='approved';
$tid=$_SESSION['tid'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body bgcolor="#fffacd">
<center>
	<script type="text/javascript">
	function send(x)
	{
     window.location.href ="viewApplication.php?id="+x;
	}
</script>
<h1><center>Approved Detail</center></h1>
<center>
<table  style ="width:60%;margin:auto; padding:5px;" border="5" bgcoclor="green">
	
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
$query1="select appId from link where status ='Approved' and tid='".$tid."'";
$res=mysqli_query($con,$query1);
while($rw=mysqli_fetch_array($res))
{
 $query="select applicationId,name,course_job,sem from application where applicationId='".$rw['appId']."'";
 $result=mysqli_query($con,$query);
 while($row=mysqli_fetch_array($result))
 {
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