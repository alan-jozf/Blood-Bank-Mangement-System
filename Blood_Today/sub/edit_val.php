<?php
    $phone = $_POST['phone'];

    $sql = "select * from user where U_id=$tmpid";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
    $value=$row['PhoneNo'];
    if($value==$phone)
    {
        $sql="update user set PhoneNo='$phone' where U_id=$tmpid ";
        mysqli_query($con,$sql)  or die($sql);
    }

?>
    
    
    <script>
		function mymob()
		{
			var n=document.getElementById("2");
			var letter=/^([6-9]{1})+([0-9]{9})$/;
			if(n.value == "")
			{
				n.value ="<?php $row['PhoneNo'];  ?>";
			}
			else if(!n.value.match(letter))
			{
				n.value ="";
				n.placeholder ="Enter valid Mobile no";
			}
		}
	
	</script>



        <?php
			$sql = "select PhoneNo from user where U_id=$tmpid";
			$result = mysqli_query($con,$sql);
			$row = mysqli_fetch_array($result);
		?>
		<b><label style ="float:left" > Mobile No :</label>  </b><br>
		<input type="text" placeholder="<?php echo $row['PhoneNo'];  ?>:"name="phone" id="2"  onblur="mymob()">
