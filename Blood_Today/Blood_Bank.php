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
	/* .middle{
		display:flex;
		padding:20px;
	} */
</style>
</head>
<body>
<?php require("Navbar.php"); ?> 
<form action="/action_page.php">
  <div class="container">
    <h1>Blood Bank And Blood Stock</h1>
	<div >
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
		<!-- <select>
			<option value="0">Blood Bank:</option>
		</select> -->
	</div>
   
    
	<div class="middle"><p>Count</p>
            <div class="circlecontainer">
                <div class="circle">A+</div></a>
            </div>
            <div class="circlecontainer">
                <div class="circle">B+ </div></a>
            </div>
            <div class="circlecontainer">
                <div class="circle">A- </div></a>
            </div>
            <div class="circlecontainer">
               <div class="circle">B- </div></a>
			</div>
			<div class="circlecontainer">
                <div class="circle">AB+ </div></a>
            </div>
            <div class="circlecontainer">
                <div class="circle">AB- </div></a>
            </div>
            <div class="circlecontainer">
                <div class="circle">O+ </div></a>
            </div>
            <div class="circlecontainer">
                <div class="circle">O+ </div></a>
            </div>
            
        </div>
  </div>
  
</form>

</body>
</html>
