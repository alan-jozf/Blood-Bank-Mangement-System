<?php
    $phone=$_POST["phone"];
    $pword=$_POST["pword"];

    session_start();
    $con=mysqli_connect("localhost","root","","bloodtoday") or die("failed");
    $sql="select * from user where PhoneNo='$phone' or email='$phone' and password='$pword'";
    $result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0)
    {
        while($row = mysqli_fetch_array($result))
	    {
            if(($phone=$row['PhoneNo']) && ($pword=$row['password']))
            { 
                $_SESSION['id']=$row['U_id'];
                header("location:../Homepage.php");
            }
            else{
                header("location:../Login.php");
            }
	    }
    }
    else{
        header("location:../Login.php");
    }
    mysqli_close($con);
  
?>