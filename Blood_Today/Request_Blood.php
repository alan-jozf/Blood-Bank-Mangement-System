<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css\D_reg.css" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script>
		function getsubdist(val) {
		$.ajax({
		type: "POST",
		url: "php/get_subdist.php",
		data:'pas_id='+val,
		success: function(data){
			$("#subdist").html(data);
		}
		});
	}
	</script>
<style>


</style>
</head>
<body>
<?php require("Navbar.php"); ?> 
<b>
<form action="#">
  <div class="container">
    <center><h1>Request Blood</h1></center>
    <label >Blood Group</label>
	<select name ="group"  required>
		<option value="">Blood Group :</option>
		<option value="A+">A+</option>
		<option value="A-">A-</option>
		<option value="B+">B+</option>
		<option value="B-">B-</option>
		<option value="AB+">AB+</option>
		<option value="AB-">AB-</option>
		<option value="O+">O+</option>
		<option value="O-">O-</option>
		<option value="Dont know">Don't Konw</option>
		<option value="Others">Others</option>
		</select>
	<label for="email">Choose Blood Bank</label>
	<select onChange="getsubdist(this.value);"  name="dist" id="dist" class="form-control" >
			<option value="">District</option>
			<?php $query =mysqli_query($con,"SELECT * FROM district");
			while($row=mysqli_fetch_array($query))
			{ ?>
				<option value="<?php echo $row['dt_id'];?>"><?php echo $row['dt_name'];?></option>
				<?php
				}
				?>
	</select>
	<select onChange="getbank(this.value);" name="subdist" id="subdist" class="form-control">
			<option value="">Sub District:</option>
	</select>
	<br>
		<!-- <select>
			<option value="">Blood Bank:</option>
		</select> -->
	</div>

	<div>
		<label >Patient id:</label>
		<input type="text"  name="pid" required>
		<label >Bed No:</label>
		<input type="text"  name="pname" required>
	</div>
	<div>
		<label >Doctor id:</label>
		<input type="text"  name="pid" required>
	</div>
<br>
    <input type="submit" value="Request">
  </div>
  <br><br>
</form>
</b>
</body>
</html>
