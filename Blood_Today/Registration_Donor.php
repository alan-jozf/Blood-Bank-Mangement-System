<?php
	$con = mysqli_connect("localhost","root","","bloodtoday")or die("failed");
?>
<!DOCTYPE html>
<html>

<head>
	<title>registration Form </title>
	<link rel="stylesheet" type="text/css" href="css\D_reg.css" />
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<style>
	/* .label{
		font:20px;
	} */
</style>
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
	function myname()
	{
		var n=document.getElementById("0");
		var letter=/[A-Z a-z]{3,}$/;
		if(n.value == "")
		{
			n.placeholder ="Name is empty";
		}
		else if(!n.value.match(letter))
		{
			n.value ="";
			n.placeholder ="Enter valid name";
		}
	}	

	function myhname()
	{
		var n=document.getElementById("1");
		var letter=/[A-Z a-z]{5,}$/;
		if(n.value == "")
		{
			n.placeholder ="Housename is empty";
		}
		else if(!n.value.match(letter))
		{
			n.value ="";
			n.placeholder ="Enter valid Housename";
		}
	}	

	function mymob()
	{
		var n=document.getElementById("2");
		var letter=/^([6-9]{1})+([0-9]{9})$/;
		if(n.value == "")
		{
			n.placeholder ="Mobile no is empty";
		}
		else if(!n.value.match(letter))
		{
			n.value ="";
			n.placeholder ="Enter valid Mobile no";
		}
	}

	function mymail()
	{
		var n=document.getElementById("3");
		var letter=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
		if(n.value == "")
		{
			n.placeholder ="Email id is empty";
		}
		else if(!n.value.match(letter))
		{
			n.value ="";
			n.placeholder ="Enter valid Email id";
		}
	}

	function mypword()
	{
		var n=document.getElementById("4");
		var letter=/^(?=.*[!@#$%^&*(),.?":{}|<>\ )(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).{6,}$/;
		if(n.value == "")
		{
			n.placeholder ="Password is empty";
		}
		else if(!n.value.match(letter))
		{
			n.value ="";
			n.placeholder ="Atleast 1 caps, 1 small, 1 num, 1 special character ";
		}
	}

	function mypword2()
	{
		var n1=document.getElementById("4");
		var n2=document.getElementById("5");
		if(n2.value == "")
		{
			n2.placeholder ="Password is empty";
		}
		else if(n1.value!=n2.value)
		{
			n2.value ="";
			n2.placeholder ="Password doesn't match...!! ";
		}
	}

</script>

<body><b>
	<!-- including top bar -->
	<?php require("Navbar.php"); ?> 

	<form action="php\addDonor.php" method="POST" >
	<h1> <center>Register as a Donor </center></h1>
	
	<label>Name:</label>
	<input type="text" placeholder="Full name :" name="name" id="0"  onblur="myname()" required>

	<label>Address:</label>
	<input type="text" placeholder="Housename :" name="hname"id="1"  onblur="myhname()"required>


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
	<br><br>
	<label>Personal Details :<label>
	<select name ="gender"  required>
		<option value="">Gender :</option>
		<option value="Male">Male</option>
		<option value="Female">Female</option>
		<option value="DontKnow">Others</option>
		</select>
	

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

	<label>Date of birth :<label>
	<input type="date" id="d" name="dob" value="" min="1960-10-10" max="2001-10-10" required>
	
	<br><br>
	<label>Contact / Account Details :<label>
	<input type="text" placeholder="Mobile no :"name="phone" id="2"  onblur="mymob()"required>
	
	<input type="text" placeholder="Email :"name="email"id="3" onblur="mymail()"required>
	
	<input type="password" placeholder="Password:"name="pword" id="4" onblur="mypword()"required>
	
	<input type="password"  placeholder=" Confirm password:" id="5" onblur="mypword2()"required><br><br>

	<input type="submit" name="submit" value="Submit"/><br><br>

	<label > <center>Already Registered ? <a href="login.php"> LOGIN</a></center></label><br><br>
	</b>
</form>
</body>
</html>
