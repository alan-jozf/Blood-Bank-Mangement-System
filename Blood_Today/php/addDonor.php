<?php
#include("Db_connection.php");
$con = mysqli_connect("localhost","root","","bloodtoday")or die("failed");
$name = $_POST['name'];
$hname = $_POST['hname'];
$subdist= $_POST['subdist'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$group=$_POST['group'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$pword = $_POST['pword'];
$type='Donor';

$query="insert into user(PhoneNo,email,password,user_type) values('$phone','$email','$pword','$type')";
mysqli_query($con,$query);
$id=mysqli_insert_id($con);

$sql = "insert into donor(U_id,name,hname,subdist,gender,dob,bloodgroup) values($id,'$name','$hname','$subdist','$gender','$dob','$group')";


if(mysqli_query($con,$sql)){
    header("location:../Login.php");
}
else{
    header("location:../Registration_Donor.php");
}
?>
