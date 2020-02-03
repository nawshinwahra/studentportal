<?php
session_start();
if (@$_SESSION['flag']!=1)
{
    header('Location:admin.php');
   // echo "NOt";
}
?>
<!DOCTYPE html>
<html>
<title>Course</title> 
<style>
body {
    background-color: #E4F7F5;
}
</style>
<body>
    <br>
<h2 align="center" style="font-family: Stoke">>>> COURSES <<<</h2>
<BR>
<form action="course.php" method="POST">
<h4 align="center" style="font-family: gabriela"><font color="mediumpurple">Course code: <input type="text" name="course_code" style ="background-color: lightblue"></h4>
<h4 align="center" style="font-family: gabriela"><font color="mediumpurple">Title: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type ="text" name="title"style ="background-color: lightblue"></h4>


<h4 align="center" style="font-family: gabriela"><font color="mediumpurple">Credit: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type ="text" name="credit" style ="background-color: lightblue"></h4>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<h4 align="center" style="color: mediumpurple">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input type="submit" value="Send" style ="background-color: mediumspringgreen"></h4>
<br>
<a href="admin.php"><h3 align="center" style="font-family: gabriela"><font color="orangered">LOG OUT</h3></a>
</form>
</body>
</html>