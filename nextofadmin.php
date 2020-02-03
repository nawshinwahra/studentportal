<!DOCTYPE html>
<?php
session_start();
if (@$_SESSION['flag']!=1)
{
    header('Location:admin.php');
   // echo "NOt";
}

?>

<html>
<title>Admin Panel</title>
<head> 
<link rel="stylesheet" href="css/bootstrap.css">
</head>
<style>
body {
    background-color: #ECF0F1;
	
}
h1{
	 background-color: #7F8C8D;
	 padding: 20px;
}

 button {
    background-color: #1ABC9C;
    border: none;
    color: white;
    padding: 25px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 24px;
    margin: 4px 2px;
    cursor: pointer;
}


</style>
<body>
    <br>
    
	
<button type="submit" style= "float:right" class="btn navbar-btn btn-danger" name="logout" id="logout"  value="Log Out">
			<a href="admin.php">Log Out</button></a>	

<div class="container-fluid jumbotron">	
<h1 align="center" style="font-family: 'Righteous', cursive;"><font color="Black">>>>> OPTIONS <<<<</h1>

</div>

<form >
<Br>
<Br>
 
<center>
<button><a href="studenthtml.php">Register student</button></a>
<button><a href="course1.php">Add course</button></a>
<button><a href="routine_admin.php">Add Routine</button></a> 
<button><a href="courseshow.php">Show all courses</button></a>
<button><a href="view.php">Student's Details</button></a>
</center>
<br>
<br>
<br>
<br>




</form>
</body>
</html>
