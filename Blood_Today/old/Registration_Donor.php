<!DOCTYPE html>
<html>
<?php
$con=mysqli_connect("localhost","root","","bloodtoday") or die("failed");
?>
<head>
	<title>registration Form </title>
	<link rel="stylesheet" type="text/css" href="css\D_reg.css" />
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css" />

</head>
<style>


</style>
<script>
	function val(){
		var patterns=[
		/^[a-z A-Z]+$/,
		/^[a-zA-Z\,0-9\ ]+$/,
		/^([6-9]{1})+([0-9]{9})$/,
		/^([A-Za-z0-9\.]{4,30})+@[a-z]+.[a-z]+$/,
		/^(?=.*[!@#$%^&*(),.?":{}|<>\ )(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).{8,}$/,
		/^(?=.*[!@#$%^&*(),.?":{}|<>\ )(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).{8,}$/];
		var fields=["NAME","HOUSE NAME","PHONE NO","EMAIL","PASSWORD","CONFIRM PASSWORD"];
		for(i=0;i<=5;i++){
			var el=document.getElementById(i).value;
			if(el=="")
			{
				alert(fields[i]+" is empty");
				return false;
			}
			else{
				var patt=patterns[i];
				if(!el.match(patt)){
					alert(fields[i]+" error");
					return false;
				}
			}
		}
		
			// alert("Registration sussessfull..!!!!")
		
	}
</script>

<body><b>
	
        <!-- including top bar -->
		<?php require("navbar.php"); ?> 
<form action="php\addlogin.php" method="POST" onsubmit="return val()">
<h1> <center>Register as a Donor </center></h1>
<div class="container_name">
		 <input type="text" placeholder="name" name="name"id="0" > 
</div>
<div class="contmiddle">
			<input type="text" placeholder="housename:"name="hname"id="1">
			<!-- <input type="text" placeholder="distrit:"name="district"id="a"> -->
			<select  name="dist" required>
				<?php
					$query = "SELECT * FROM district";
					$results = mysqli_query($con,$query);
					while ($rows = mysqli_fetch_assoc(@$results))
					{ 
						?>
						<option name="<?php echo $rows['dt_name'];?>" value="<?php echo $rows['dt_name'];?>"><?php echo $rows['dt_name'];?></option>

					<?php
						} 
					?>
				</select>
			<!-- <input type="text" placeholder="subdist:"name="subdist"id="b"> -->
			<select  name="subdist" required>
				<?php
					$query = "SELECT * FROM subdist";
					$results = mysqli_query($con,$query);
					while ($rows = mysqli_fetch_assoc(@$results))
					{ 
						?>
						<option name="<?php echo $rows['sd_name'];?>" value="<?php echo $rows['sd_name'];?>"><?php echo $rows['sd_name'];?></option>

					<?php
						} 
					?>
				</select>
			<!-- <input type="text" placeholder="gender:"name="gender" id="c"> -->
			<select name ="gender" placeholder="gender:" required>
				<option value="Male">Male</option>
				<option value="Female">Female</option>
				<option value="DontKnow">Others</option>

			</select>
			<input type="date" id="d" name="dob" value="2000-10-10" min="1960-10-10" max="2001-10-10">
			<!-- <input type="text" placeholder="blood group:"name="group" id="e"> -->
			<select name ="group" placeholder="group:" required>
				<option value="A+">A+</option>
				<option value="A-">A-</option>
				<option value="B+">B+</option>
				<option value="B-">B-</option>
				<option value="O+">O+</option>
				<option value="O-">O-</option>
				<option value="DontKnow">Dont Know</option>

			</select>


</div>

<div class="cont_bottom">
			<input type="text" placeholder="phone:"name="phone" id="2">
			<input type="text" placeholder="email:"name="email"id="3" >
			<input type="password" placeholder="password:"name="pword" id="4">
			<input type="password"  placeholder=" confirm password:"id="5">
</div><br>
<div class="button">
	<button onclick="val()" >Submit</button>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

		<label > <center>Already Registered ? <a href="login.php"> LOGIN</a></center></label>

</form>
</body>
</html>
