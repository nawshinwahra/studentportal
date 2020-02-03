<?php
session_start();
if (@$_SESSION['flag']!=1)
{
    header('Location:admin.php');
   // echo "NOt";
}

?>
<html>
<title>View</title>
<head> 
<link rel="stylesheet" href="css/bootstrap.css">
</head>
<style>
body {
     background-color: #ECF0F1;
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
<button type="submit" style= "float:right" class="btn navbar-btn btn-danger" name="logout" id="logout"  value="Log Out">
			<a href="admin.php">Log Out</button></a>	
    <br>
    <br>
<div class="container-fluid jumbotron"><h1 align="center" style="font-family: 'Abril Fatface', cursive;">>>> VIEW INFO <<<</h1>
<BR>
<H2 align="center" style="font-family: 'Abril Fatface', cursive;"><font color="blue">~ Select To View Information ~</H2></div>
<form>
<center>
<button><a href="infousershow.php" >Student's Info</a></button>
<button><a href="cctest4.php">CGPA Calculator</a></button>
 <button><a href="card.php">ID Card</a></button>
 <button><a href="routine_admin.php">Show Routine</a></button>

</center>
</form>
</body>
</html>