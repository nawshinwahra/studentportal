
<!DOCTYPE html>
<html>
<head>
	<title>Students</title>
</head>
<style>
body {
	background-color: #E4F7F5;
}
</style>
<body>
	<h2 align="center" style="font-family: stoke"><b>ALL STUDENTS</h2>

<?php
$con =mysqli_connect("localhost","root","","studentportal");
$sql="SELECT *FROM info";
$result=mysqli_query($con,$sql);
echo '<table border="2" align="center">';
echo "<tr><th>Name</th><th>Id</th><th>Intake</th><th>Section</th><th>Address</th><th>Phone</th><th>gender</th><th>Blood groupName</th><th>Username</th><th>Password</th><th>Position</th>";
echo "</tr>";
while($row=mysqli_fetch_array($result))
{
	echo'<tr>';
	echo'<td align="center">'.$row['name'].'</td>';
	echo'<td align="center">'.$row['id'].'</td>';
	echo'<td align="center">'.$row['intake'].'</td>';
	echo'<td align="center">'.$row['section'].'</td>';
	echo'<td align="center">'.$row['adress'].'</td>';
	echo'<td align="center">'.$row['phone'].'</td>';
	echo'<td align="center">'.$row['gender'].'</td>';
	echo'<td align="center">'.$row['bloodgroup'].'</td>';
	echo'<td align="center">'.$row['username'].'</td>';
	echo'<td align="center">'.$row['password'].'</td>';
	echo'<td align="center">'.$row['position'].'</td>';
	echo'<br>';
	echo'</tr>';
}
echo '</table>';
?>

<a href="view.html"><h3 align="center" style="font-family: gabriela"><font color="blue">Back to view info</h3></a>
</body>
</html>