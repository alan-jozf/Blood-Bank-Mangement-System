<?php
    $con = mysqli_connect("localhost","root","","bloodtoday")or die("failed");;
    if(!empty($_POST["dt_id"])) 
    {
        $query =mysqli_query($con,"SELECT * FROM district WHERE dt_id = '" . $_POST["dt_id"] . "'");
        ?>
        <option value="">Select District</option>
        <?php
        while($row=mysqli_fetch_array($query))  
        {
            ?>
            <option value="<?php echo $row["sd_name"]; ?>"><?php echo $row["sd_name"]; ?></option>
            <?php
        }
    }
?>
