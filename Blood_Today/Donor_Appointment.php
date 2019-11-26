<?php
$con = mysqli_connect("localhost","root","","bloodtoday")or die("failed");
?>
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
	// function getbank(val) {
	// 	$.ajax({
	// 	type: "POST",
	// 	url: "php/get_bank.php",
	// 	data:'pass_id='+val,
	// 	success: function(data){
	// 		$("#bloodbank").html(data);
	// 	}
	// 	});
	// }

	</script>	
<style>
	

</style>
</head>
<body>
<?php require("Navbar.php"); ?> 

<form action="/action_page.php">
  	<div class="container">
    <center><h1>Request Appointment</h1></center>
	<label for="email"><b>Choose Blood Bank</b></label>
		<div >
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
				

      	<select  name="bloodbank" id="bloodbank" required>
		  	<option value="">Blood Bank:</option>
			<?php
			$query = "SELECT * FROM bloodbank";
			$results = mysqli_query($con,$query);

			while ($rows = mysqli_fetch_assoc($results)){ 
			?>
				<option name="<?php echo $rows['bbname'];?>" value="<?php echo $rows['bbname'];?>"><?php echo $rows['bbname'];?></option>
			<?php
			} 
			?>
		</select>

	</div>
	
    <label for="psw"><b>Choose Date and Time:</b></label><br>
  		<input type="date" id="start" name="dob" value="2019-11-18"
					min="2019-12-12" max="2020-02-02"required>
		<!-- <input type="time" id="start" name="time" value="10-00" 
					min="09-10" max="04-30"> -->
		<!-- <input type="number" start="50" value="" placeholder="Weight"> -->
	<br><label for="psw"><b>Personal Details:</b></label><br>
		<div>
		<!-- <select name ="group"  required>
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
		</select> -->
			
		<select  name="group" id="group" required>
		  	<option value="">Blood Group:</option>
			<?php
			$query = "SELECT * FROM bloodgroup";
			$results = mysqli_query($con,$query);

			while ($rows = mysqli_fetch_assoc($results)){ 
			?>
			<option name="<?php echo $rows['BloodType'];?>" value="<?php echo $rows['BloodType'];?>"><?php echo $rows['BloodType'];?></option>

			<?php
			} 
			?>
		</select>
		</div>
		<div>
			<label for="psw"><b>Last Date of Donation:</b></label><br>
			<input type="date" id="start" name="dob" value="2018-10-10"
					min="2010-10-10" max="2019-12-12"required>
		</div>
		<!-- <input type="submit" value="Request"> -->
		<input type="button" value="Request">
  	</div>
  
</form>

</body>

</html>
