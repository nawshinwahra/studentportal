<?php
session_start();
if (@$_SESSION['flag']!=1)
{
    header('Location:admin.php');
   // echo "NOt";
}

?>
<?php
$con =mysqli_connect("localhost","root","","studentportal");
  if (!$con)
  {
    echo "Not connected";
  }
  else
  {
    echo "Successfully connected";
  }
$name= $_POST['name'];
$id= $_POST['id'];
$intake= $_POST['intake'];
$section= $_POST['section'];
$address= $_POST['address'];
$phone= $_POST['phone'];
$gender= $_POST['gender'];
$bloodgroup= $_POST['bloodgroup'];
$username= $_POST['username'];
$password= $_POST['password'];
$position= $_POST['position'];

echo '<br>';
//$sql="INSERT INTO student (name,s_id,intake,section,dept_name,email) VALUES ('$name','$id','$intake','$section','$department','$email')";
$sql="INSERT INTO inFo (name,id,intake,section,adress,phone,gender,bloodgroup,username,password,position) VALUES ('$name','$id','$intake','$section','$address','$phone','$gender','$bloodgroup','$username','$password','$position')";
  if (mysqli_query($con,$sql))
  {
    echo "Inserted Successfully";
  }
  else
  {
    echo "Insertion Failed";
  }
?>