<?php
    session_start();
?>
<html>
    <head>
        <title>Blood Today</title>
        <link rel="stylesheet" type="text/css" href="css/navbar.css" />
        <!-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css" /> -->
        <style>
            
        </style>
    </head>
<body>
    <div class="toprow">
        <h1>Blood Today</h1>
        <?php
            if(isset($_SESSION['id']))
            {
                $con = mysqli_connect("localhost","root","","bloodtoday")or die("failed");
                $tmpid=$_SESSION['id'];
                $sql="select image from dp where U_id=$tmpid ";
                $result=mysqli_query($con,$sql) or die($sql);
                if(mysqli_num_rows($result)>0)
                {
                    $row = mysqli_fetch_array($result);
                    $image = $row['image'];
                    $image_src = "uploads/".$image;
                    ?>
                    <a href="View.php"><img class="usericon" src="<?php echo $image_src;  ?>" width="50" height="50"></a>
                    <?php
                }
                else{
                ?>
                    <a href="View.php"><img class="usericon" src="images/usericon2.png" width="50" height="50"></a>
                <?php
                }
                ?>
                
                <!-- <a href="php/view.php"><img class="usericon" src="images/usericon2.png" width="50" height="50"></a> -->
            <?php
            }
            else{
            ?>
                <a href="Login.php"><img class="usericon" src="images/usericon2.png" width="50" height="50"></a>
            <?php
            }
        ?>
    </div>

        <!-- <div class="www">
            <center>
            <h3>Kerala Online Blood Bank</h3>
            <h5>www.bloodtoday.com</h5></center>
        </div> -->


        <?php
            if(isset($_SESSION['id']))
            {
                $con = mysqli_connect("localhost","root","","bloodtoday")or die("failed");
                $tmpid=$_SESSION['id'];
                    $sql="select name from donor where U_id=$tmpid 
                        union select h_name as name from hospital where U_id=$tmpid 
                        union select a_name as name from admin where U_id=$tmpid 
                        union select bbname as name from bloodbank where U_id=$tmpid";
                    $result=mysqli_query($con,$sql) or die($sql);

                    if(mysqli_num_rows($result)>0)
                    {
                        while($row=mysqli_fetch_array($result))
                        {
                            $name=$row['name'];
                            
                            #$image='uploads/'.$row['file'];
                            #$_SESSION['img']=$image;
                        }
                    }
                ?>
                
                <div class="dropdown">
                <button class="dropbtn"><?php echo $name ?></button>
                    <div class="dropdown-content">
                        <a href="View.php">View</a>
                        <a href="Edit.php">Edit</a>
                        <a href="php/logout.php">Log Out</a>
                    </div>
                </div>
                <?php
            }

        ?>

    <div class="topnav">
        <a class="active" href="Homepage.php">Home</a>
        <a href="#about">News</a>
        <a href="#about">Images</a>
        <a href="#about">Contact Us</a>
        <a href="#about">Donate Us</a>
        <a href="#about">About Us</a>
    </div>
</body>
</html>
