<?php
session_start();
if (@$_SESSION['flag']!=1)
{
    header('Location:admin.php');
   // echo "NOt";
}

?>

<?php
//session_start();
$uname=@$_SESSION['uname'];

$con =mysqli_connect("localhost","root","","studentportal");
$sql="SELECT * FROM info";
//echo $sql;
$result=mysqli_query($con,$sql);

while($row=mysqli_fetch_array($result))
{
    if($uname==$row['username'])
    {
	$name=$row['name'];
	$id=$row['id'];
	$intake=$row['intake'];	
	$address=$row['adress'];
	$phone=$row['phone'];
    $blood=$row['bloodgroup'];
    }
    

}


?>
<!DOCTYPE html>
<html>
<head>
<style>

.card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 40%;
    border-radius: 5px;
	 position: fixed;
     background-color: LightGray;
     align:center;
     
    
}

.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    
    
}

img {
    border-radius: 10px 10px 0 0;
	text-align: center;
    background-color: gray;
}

.container {
    align:center;
    padding: 2px 16px;
    
	
}


</style>
</head>
<body a>

<h2>ID Card</h2>

<div class="card">
 <b > <img src="" align="center"  alt="BANGLADESH UNIVERSITY OF BUSINESS AND TECHNOLOGY&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" style="width:100%" ></b>
  <div class="container">
    <h3><b><?php echo $name; ?></b></h3> 
    <p>ID: <?php echo $id; ?></p> 
	<p>INTAKE: <?php echo $intake; ?></p> 
	<p>BLOOD GROUP: <?php echo $blood; ?></p> 
		<hr>
			<p align="center" ><strong></strong>Mirpur-2, Dhaka-1216 <p>

			<p>Phone: 90224266, 9020132-4, 9024277,901539&nbsp&nbsp&nbspEmail: info@bubt.edu.bd</p>

  </div>
</div>

</body>
</html> 