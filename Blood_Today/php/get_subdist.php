
<?php
$con = mysqli_connect("localhost","root","","bloodtoday")or die("failed");;
if(!empty($_POST["pas_id"])) 
    {
    $query =mysqli_query($con,"SELECT * FROM subdist WHERE dt_id = '" . $_POST["pas_id"] . "'");
    ?>
    <option value="">Sub District</option>
    <?php
    while($row=mysqli_fetch_array($query))  
    {
        ?>
        <option value="<?php echo $row["sd_name"]; ?>"><?php echo $row["sd_name"]; ?></option>
        <?php
        }
    }
?>
