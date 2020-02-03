<?php
$con =mysqli_connect("localhost","root","","studentportal");
session_start();
@$_SESSION['loggedin']=0;
  $username=$_POST['username'];
  $password=$_POST['password'];
  
  $sql="SELECT *FROM info";
$result=mysqli_query($con,$sql);
$f=0;
while($row=mysqli_fetch_array($result))
{
	//echo"<tr>";
	//echo $row['username'];
	//echo '<br>';
	//echo $row['password'];
	if(($row['username']==$username) && ($row['password']==$password))
	{
		
		@$_SESSION['flag']="1";
		@$_SESSION['uname']=$username;
		//echo "successfully logged in\n";
		//echo '<a href="nextofadmin.html">Go to students</a>';
		if($row['position']=="admin")
		{
		header("Location: nextofadmin.php");
		die();
		}
		else if($row['position']=="user")
		{
			header("Location: viewuser.php");
			//<a href="infoshow.php"><h4 align="center" style="font-family: gabriela"><font color="mediumpurple">Student's Info</h4></a>
		die();
		}
	
		break;
		$f=1;
	}
}
echo $_SESSION['flag'];
echo "Ok";
	if($f==0)
		echo "Wrong username or password\n";

	echo'<br>';
	echo"</tr>";
	

?>