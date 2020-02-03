
<?php
session_start();
@$_SESSION['flag']=0

?>
<!DOCTYPE html>
<html>
<title>Login</title>
<style>
body {
    background-color: #585453;
}
</style>
<body>
    <br>
    <br>
    <br>
<H1 align="center" style="font-family: Stoke"><font color="white">LOGIN</H1>
<br>
<form action="admin2.php" method="POST">
<h3 align="center" style="font-family: gabriela"><font color="white">Username: <input type="text" name="username" style ="background-color: lightblue"></h3>
<h3 align="center" style="font-family: gabriela">Password: &nbsp<input type="password" name="password" style ="background-color: lightblue"></h3>
<h4 align="center" style="color: powderblue">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input type="submit" value="Send" style ="background-color: mediumspringgreen"></h4>
</form>
</body>
</html>