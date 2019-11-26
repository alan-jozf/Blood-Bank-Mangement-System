<!DOCTYPE html>
<html lang="en">
<head>
	<title>EDIT</title>
	<link rel="stylesheet" type="text/css" href="css\D_reg.css" />

</head>
<body><center>
<?php require("Navbar.php"); ?> 
    <form action="php\upload.php" method='POST' enctype="multipart/form-data">

	<?php
		$con=mysqli_connect("localhost","root","","bloodtoday") or die("failed");
		$tmpid=$_SESSION['id'];
		$sql = "select image from dp where U_id=$tmpid";
		$result = mysqli_query($con,$sql);
		if(mysqli_num_rows($result)>0)
        {
			$row = mysqli_fetch_array($result);
			$image = $row['image'];
			$image_src = "uploads/".$image;
			?>
			<img src='<?php echo $image_src;  ?>' width="100" height="100" >

			<?php
		}
		?>	
		<br>
		<b><label style ="float:left" > Update DP :</label>  </b><br>
		<input type="FILE" name='1'><br>
        <input type="submit" value="Upload">
    </form>
</center>
</body>
</html>