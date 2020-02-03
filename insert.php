<?php
session_start();
if (@$_SESSION['flag']!=1)
{
    header('Location:admin.php');
   // echo "NOt";
}

?>
<head>
<style>
table, th, td {
    border: 1px solid navy;
    background-color: LightBlue;
}


</style>
</head>
<html>
<body style ="background-color: Gainsboro ">  
<h1 align="center"><font colo>CGPA TABLE</h1>
</body>
</html>
<?php
$count=0;
$con =mysqli_connect("localhost","root","","studentportal");
$sql="SELECT * FROM course";
$result=mysqli_query($con,$sql);
$totalCredit=0;
$sum=0;


for($i = 0; $i<sizeof($_POST['addmore']); $i++)
{
    $gpa[$i] = $_POST['addmore'][$i];
    $course[$i] = $_POST['course'][$i];
    
   // echo $course[$i];
  // echo $gpa[$i];

   $count=$count+1;
    // update DB with input values

    $sql="SELECT * FROM course ";
    //echo $sql;
    $result=mysqli_query($con,$sql);
    
    while($row=mysqli_fetch_array($result))
    {
       // echo $row[0];
       //   echo $row[1];
          if($row[0]==$course[$i])
          {
          $credits[$i]=$row[2];
        //  echo $credits[$i];
         // echo '</br>';
         $totalCredit=$totalCredit+$credits[$i];
          }
    }
    
  //  echo $credits[$i];
}



echo '<table border="2" align="center">';
echo '<tr>';
echo '<th align="center" style ="background-color: MidnightBlue  "><font color="white">'.'Courses'.'</th>';
for($i=0;$i<$count;$i++)
{
    
  //  echo "<tr><th>Name</th><th>Id</th><th>Intake</th><th>Section</th><th>Address</th><th>Phone</th><th>gender</th><th>Blood groupName</th>";
    echo '<th>'.$course[$i].'</th>';

}
echo '</tr>';

echo '<tr>';
echo '<th align="center" style ="background-color: MidnightBlue  "><font color="white">'.'GPA'.'</th>';
for($i=0;$i<$count;$i++)
{
    
  //  echo "<tr><th>Name</th><th>Id</th><th>Intake</th><th>Section</th><th>Address</th><th>Phone</th><th>gender</th><th>Blood groupName</th>";
    echo '<th>'.$gpa[$i].'</th>';

}
echo '</tr>';

echo '<tr>';
echo '<th align="center" style ="background-color: MidnightBlue  "><font color="white">'.'Credits'.'</th>';
for($i=0;$i<$count;$i++)
{
    
  //  echo "<tr><th>Name</th><th>Id</th><th>Intake</th><th>Section</th><th>Address</th><th>Phone</th><th>gender</th><th>Blood groupName</th>";
    echo '<th>'.$credits[$i].'</th>';

}
echo '</tr>';


echo '<tr>';
echo '<th align="center" style ="background-color: MidnightBlue  "><font color="white">'.'Credits X GPA'.'</th>';
for($i=0;$i<$count;$i++)
{
    
  //  echo "<tr><th>Name</th><th>Id</th><th>Intake</th><th>Section</th><th>Address</th><th>Phone</th><th>gender</th><th>Blood groupName</th>";
    echo '<th>'.$credits[$i]*$gpa[$i].'</th>';
    $sum=$sum+($credits[$i]*$gpa[$i]);

}
$cgpa=$sum/$totalCredit;
echo '</tr>';
echo '</table>';
echo '<table align="center">';

echo '<tr align="center">';
//echo '<th align="center">';
echo '<td align="center"  width="100" ><h3>CGPA:&nbsp&nbsp'.round($cgpa,2).'</h3></td>';
//echo '</th';
echo '</tr>';



echo '</table>';
echo'<a href="admin.php"><h3 align="center" style="font-family: gabriela"><font color="orangered">LOG OUT</h3></a>'
?>