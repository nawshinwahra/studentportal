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
$sql="SELECT * from course";
$result=mysqli_query($con,$sql);
$ii=0;
?>
<html lang="en">
<head>
  <title>CGPA CALCULATOR</title>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body style ="background-color: Gainsboro ">

<div class="container"style="width: 50rem;">
  <div class="panel panel-default"style ="background-color: LightBlue">
    <div class="panel-heading" align="center"style ="background-color: dimgray" ><font color="white"><h1>CGPA CALCULATOR</h1></div>
    <div class="panel-body">
    <form action="insert.php" method="POST">

      	<div class="input-group control-group after-add-more"align="center">
			
          <h4  style="font-family: gabriela"><font color="black">Course : &nbsp&nbsp&nbsp&nbsp
              &nbsp&nbsp&nbsp&nbsp&nbsp 
              <select name="course[]" style ="background-color: LightGray"></h4>
<?php while($row1 = mysqli_fetch_array($result)):;?>
<option><?php echo $row1[0];?></option>
<?php endwhile;?>
            </select>


               <!-- <input type="text" name="addmore[]"  placeholder="Enter Obtained GPA"> -->
               
               &nbsp&nbsp&nbsp&nbsp&nbsp <select   name="addmore[]" style ="background-color: LightGray"></h4>
               <optgroup label="GPA">
			<option value="4">4</option>
			<option value="3.75">3.75</option>
			<option value="3.5">3.5</option>
			<option value="3.25">3.25</option>
			<option value="3.0">3.0</option>
			<option value="2.75">2.75</option>
			<option value="2.5">2.5</option>
			<option value="2.25">2.25</option>
			<option value="2.0">2.0</option>
            <option value="0">0</option>
</optgroup>
			</select>




					  <div class="input-group-btn"> 
						<button class="btn btn-success add-more" type="button"><i class="glyphicon glyphicon-plus"></i> Add</button>
                        
                    </div>
			  </div>
             <!-- <input type="submit" value="Send"  > -->
            <!--  <button  class="btn btn-primary"  type="submit" style="float:right;"> Send</button> -->
              <button type="submit" class="btn btn-primary btn-lg btn-block">Calculate</button>
  
       </form>
		

        <!-- Copy Fields-These are the fields which we get through jquery and then add after the above input,-->
        <div class="copy-fields hide">
          <div class="control-group input-group" style="margin-top:10px">

          <?php $result=mysqli_query($con,$sql); ?>

          <h4 align="center" style="font-family: gabriela"><font color="black">Course : &nbsp&nbsp&nbsp
              &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
              <select name="course[]" style ="background-color: LightGray"></h4>

<?php while($row1 = mysqli_fetch_array($result)):;?>
<option><?php echo $row1[0];?></option>
<?php endwhile;?>
            </select>


        <!--    <input type="text" name="addmore[]"  placeholder="Enter Obtained CGPA"> -->
            
           


               <!-- <input type="text" name="addmore[]"  placeholder="Enter Obtained GPA"> -->
               
               &nbsp&nbsp&nbsp&nbsp&nbsp <select   name="addmore[]" style ="background-color: LightGray"></h4>
               <optgroup label="GPA">
			<option value="4">4</option>
			<option value="3.75">3.75</option>
			<option value="3.5">3.5</option>
			<option value="3.25">3.25</option>
			<option value="3.0">3.0</option>
			<option value="2.75">2.75</option>
			<option value="2.5">2.5</option>
			<option value="2.25">2.25</option>
			<option value="2.0">2.0</option>
            <option value="0">0</option>
</optgroup>
			</select>

            
            <div class="input-group-btn"> 
              <button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
            </div>
          </div>
        </div>
	</div>
  </div>
</div>

<script type="text/javascript">

    $(document).ready(function() {

	//here first get the contents of the div with name class copy-fields and add it to after "after-add-more" div class.
      $(".add-more").click(function(){ 
          var html = $(".copy-fields").html();
          $(".after-add-more").after(html);
      });
//here it will remove the current value of the remove button which has been pressed
      $("body").on("click",".remove",function(){ 
          $(this).parents(".control-group").remove();
      });

    });

</script>

</body>
</html>