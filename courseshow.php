
<!DOCTYPE html>
<html>
<head>
	<title>All Courses</title>
</head>
<style>
body {
	background-color: #E4F7F5;
}
</style>
<body>
	<h2 align="center" style="font-family: stoke"><b>COURSES</h2>

<?php
$con =mysqli_connect("localhost","root","","studentportal");
$sql="SELECT *FROM course";
$result=mysqli_query($con,$sql);
echo '<table border="2" align="center">';
echo "<tr><th>Course Code</th><th>Title</th><th>Credit</th>";
echo "</tr>";
while($row=mysqli_fetch_array($result))
{
	echo'<tr>';
	echo'<td align="center">'.$row['course_code'].'</td>';
	echo'<td align="center">'.$row['course_tittle'].'</td>';
	
	echo'<td align="center">'.$row['credits'].'</td>';
	//echo'<br>';
	echo'</tr>';
}
echo '</table>';
?>

<a href="nextofadmin.php"><h3 align="center" style="font-family: gabriela"><font color="blue">Back to previous</h3></a>
</body>
</html>