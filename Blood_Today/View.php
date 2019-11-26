<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/D_reg.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>

	</style>
</head>
<body>
	<?php require("Navbar.php"); ?> 
	<form>
		<center>
		<?php
			
		if(isset($_SESSION['id']))
		{
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
			$tmpid=$_SESSION['id'];
			$sql="select user_type from user where U_id=$tmpid";
			$result=mysqli_query($con,$sql) or die($sql);
			$row=mysqli_fetch_array($result);
			if($row['user_type']=='Donor')
			{
				$sq="select * from donor where U_id=$tmpid " ;
				$resul=mysqli_query($con,$sq) or die($sq);
				$sq2=" select * from user where U_id=$tmpid";
				$resul2=mysqli_query($con,$sq2) or die($sq2);

				$row=mysqli_fetch_array($resul)
					?>
					<h3><?php echo $row['name'] ?></h3>
					<h3><?php echo $row['hname'] ?></h3>
					<h3><?php echo $row['bloodgroup'] ?></h3>
					<h3><?php echo $row['subdist'] ?></h3>
					<h3><?php echo $row['gender'] ?></h3>
					<h3><?php echo $row['dob'] ?></h3>
					<?php
				$row=mysqli_fetch_array($resul2)
					?>
					<h3><?php echo $row['PhoneNo'] ?></h3>
					<h3><?php echo $row['email'] ?></h3>
					<?php
				
			}
			elseif($row['user_type']=='Hospital')
			{
				$sq="select * from hospital where U_id=$tmpid";
				$resul=mysqli_query($con,$sq) or die($sq);
				$sq2=" select * from user where U_id=$tmpid";
				$resul2=mysqli_query($con,$sq2) or die($sq2);

				$row=mysqli_fetch_array($resul)
					?>
					<h3><?php echo $row['h_name'] ?></h3>
					<?php
				$row=mysqli_fetch_array($resul2)
					?>
					<h3><?php echo $row['PhoneNo'] ?></h3>
					<h3><?php echo $row['email'] ?></h3>
					<?php
					
			}
			elseif($row['user_type']=='Bank')
			{
				$sq="select * from hospital where U_id=$tmpid";
				$resul=mysqli_query($con,$sq) or die($sq);
				$sq2=" select * from user where U_id=$tmpid";
				$resul2=mysqli_query($con,$sq2) or die($sq2);

				$row=mysqli_fetch_array($resul)
					?>
					<h3><?php echo $row['bbname'] ?></h3>
					<?php
				$row=mysqli_fetch_array($resul2)
					?>
					<h3><?php echo $row['PhoneNo'] ?></h3>
					<h3><?php echo $row['email'] ?></h3>
					<?php
			}
			elseif($row['user_type']=='Admin')
			{
				$sq="select * from admin where U_id=$tmpid";
				$result=mysqli_query($con,$sq) or die($sq);
				$sq2=" select * from user where U_id=$tmpid";
				$resul2=mysqli_query($con,$sq2) or die($sq2);

				$row=mysqli_fetch_array($result);
					?>
					<h2><?php echo $row["a_name"]; ?><br></h2>
					<?php
				$row=mysqli_fetch_array($resul2)
					?>
					<h3><?php echo $row['PhoneNo'] ?></h3>
					<h3><?php echo $row['email'] ?></h3>
					<?php
			}
		}
	?>
	<br>
	<a href="Edit.php"><input type="button" value="Edit"></a>

	</center>
	</form>	
</body>
</html>
