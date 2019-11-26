<?php
#include("Db_connection.php");
$con = mysqli_connect("localhost","root","","bloodtoday")or die("failed");
$name = $_POST['name'];
$subdist= $_POST['subdist'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$pword = $_POST['pword'];
$type='Hospital';
$sd_id=1;
$query="insert into user(PhoneNo,email,password,user_type) values('$phone','$email','$pword','$type')";
mysqli_query($con,$query);

$id=mysqli_insert_id($con);
// $sq="select sd_id from subdist where sd_name=$subdist ";
// $result=mysqli_query($con,$sq) or die($sq);
// sd_id =,$result['sd_id']
$sql = "insert into hospital(U_id,h_name,sd_id) values($id,'$name',$sd_id)";


if(mysqli_query($con,$sql)){
    header("location:../Homepage.php");
}
else{
    header("location:../Registration_Hospital.php");
}
?>
