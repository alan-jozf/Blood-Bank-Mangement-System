<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css\D_reg.css" />

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>



</style>
</head>
<body>
<?php require("Navbar.php"); ?> 

<?php
	if(isset($_SESSION['id']))
	{
		$tmpid=$_SESSION['id'];
		$sql="select user_type from user where U_id=$tmpid";
		$result=mysqli_query($con,$sql) or die($sql);
		$row=mysqli_fetch_array($result);
	}
?>

<form action="#">
  <div class="container">
	<h1>Blood Requests</h1>
	<div><h3>1</h3>
		<label ><b>Blood Group</b></label><br>
		<label >Paient Name:</label><label > Paient id</label><br>
		<label >Doctor Name:</label><label > Doctor id</label><br>
		<label >Hospital Name:</label><label > Hospital id</label>
		<?php
		if($row['user_type']=='Bank')
		{?>
			<input type="submit" value="Accept" name="Accept" >
			<input type="submit" value="Cancel">
			<?php
			
		}
		?>
	</div>
	<div><h3>2</h3>
		<label ><b>Blood Group</b></label><br>
		<label >Paient Name:</label><label > Paient id</label><br>
		<label >Doctor Name:</label><label > Doctor id</label><br>
		<label >Hospital Name:</label><label > Hospital id</label>
		<?php
		if($row['user_type']=='Bank')
		{?>
			<input type="submit" value="Accept" name="Accept" >
			<input type="submit" value="Cancel">
			<?php
			
		}
		?>
	</div>
	<div><h3>3</h3>
		<label ><b>Blood Group</b></label><br>
		<label >Paient Name:</label><label > Paient id</label><br>
		<label >Doctor Name:</label><label > Doctor id</label><br>
		<label >Hospital Name:</label><label > Hospital id</label>
		<?php
		if($row['user_type']=='Bank')
		{?>
			<input type="submit" value="Accept" name="Accept" >
			<input type="submit" value="Cancel">
			<?php
			
		}
		?>
	</div>
    
  </div>
  
</form>

</body>
</html>
