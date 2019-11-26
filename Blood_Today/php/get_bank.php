<?php
$con = mysqli_connect("localhost","root","","bloodtoday")or die("failed");;
if(!empty($_POST["pass_id"])) 
    {
    $query =mysqli_query($con,"SELECT * FROM bloodbank WHERE sd_id = '" . $_POST["pass_id"] . "'");
    ?>
    <option value="">Blood Bank</option>
    <?php
    while($row=mysqli_fetch_array($query))  
    {
        ?>
        <option value="<?php echo $row["bbname"]; ?>"><?php echo $row["bbname"]; ?></option>
        <?php
        }
    }
?>
