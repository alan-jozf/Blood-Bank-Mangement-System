
<html>
    <head>
        <title>Blood Bank Management System</title>
        <link rel="stylesheet" type="text/css" href="css\H_page.css"<?php echo time();?>/>
        <style>

        </style>
    </head>
<body>
    <!-- including top bar -->
    <?php require("Navbar.php"); ?> 
    <div class="middle">
        <?php
            
            if(isset($_SESSION['id']))
            {
                $tmpid=$_SESSION['id'];
                $sql="select user_type from user where U_id=$tmpid";
                $result=mysqli_query($con,$sql) or die($sql);
                #mysql_select_db("project", $con);
                #$result=mysql_query("select user_name from user");
                $row=mysqli_fetch_array($result);
                if($row['user_type']=='Donor')
                {
                    ?>
                        <div class="circlecontainer">
                            <a href="Donor_Appointment.php"><div class="circle">Donate Blood</div></a>
                        </div>
                    <?php
                }
                elseif($row['user_type']=='Hospital')
                {
                    ?>
                        <div class="circlecontainer">
                            <a href="Request_Blood.php"><div class="circle">Request Blood</div></a>
                        </div>
                    <?php
                }
                elseif($row['user_type']=='Admin')
                {
                    ?>
                        <div class="circlecontainer">
                            <a href="Registration_Bank.php"><div class="circle">Add Bank</div></a>
                        </div>
                    <?php
                }
                elseif($row['user_type']=='Bank')
                {
                    ?>
                        <div class="circlecontainer">
                            <a href="View_Request.php"><div class="circle">View Requests</div></a>
                        </div>
                    <?php
                }
            }
            else
            {
                ?>
                    <div class="circlecontainer">
                        <a href="Registration_Donor.php"><div class="circle">Donate Blood</div></a>
                    </div>
                <?php
            }
        ?>

        <?php
            
            if(isset($_SESSION['id']))
            {
                
                if($row['user_type']=='Bank')
                {
                    ?>
                        <div class="circlecontainer">
                            <a href="View_Appointment.php"><div class="circle">View Appointments</div></a>
                        </div>
                    <?php
                }
                elseif($row['user_type']=='Admin')
                {
                    ?>
                        <div class="circlecontainer">
                            <a href="Registration_Hospital.php"><div class="circle">Add Hospital</div></a>
                        </div>
                    <?php
                }
                else
                {
                    ?>
                        <div class="circlecontainer">
                            <a href="Blood_Bank.php"><div class="circle">Blood Bank</div></a>
                        </div>
                    <?php
                }
            }
            else
            {
                ?>
                    <div class="circlecontainer">
                        <a href="Blood_Bank.php"><div class="circle">Blood Bank</div></a>
                    </div>
                <?php
            }
        ?>

        <?php
            
            if(isset($_SESSION['id']))
            {
               
                if($row['user_type']=='Admin' || $row['user_type']=='Bank')
                {
                    ?>
                        <div class="circlecontainer">
                            <a href="Blood_Bank.php"><div class="circle">Blood Bank</div></a>
                        </div>
                    <?php
                }
                else
                {
                    ?>
                        <div class="circlecontainer">
                            <a href="Active_Donor.php"><div class="circle">Active Donors</div></a>
                        </div>
                    <?php
                }
            }
            else
            {
                ?>
                    <div class="circlecontainer">
                        <a href="Active_Donor.php"><div class="circle">Active Donors</div></a>
                    </div>
                <?php
            }
        ?>

        <?php
            
            if(isset($_SESSION['id']))
            {
                if($row['user_type']=='Bank'||$row['user_type']=='Admin')
                {
                    ?>
                        <div class="circlecontainer">
                            <a href="Active_Donor.php"><div class="circle">Active Donors</div></a>
                        </div>
                    <?php
                }
                else
                {
                    ?>
                        <div class="circlecontainer">
                            <a href="View_Request.php"><div class="circle">View Requests</div></a>
                        </div>
                    <?php
                }
            }
            else
            {
                ?>
                    <div class="circlecontainer">
                        <a href="View_Request.php"><div class="circle">View Requests</div></a>
                    </div>
                <?php
            }
        ?>
       
    </div>

    <div class="bellow_middle">
        <CENTER><H1>Why Donate Blood !</H1></CENTER>
        <div class="box" >
            <p><img src="images/donate.jpg"  width="350" height="350">
        </div>
        <div class="box" >
            <p><br><br>Our nation requires 4 Crore Units of Blood while only 40 lakh units are available,
                Every two seconds someone needs Blood. There is no substitute for Human Blood. It cannot be manufactured<br>
                <br>Blood donation is an extremely noble deed, yet there is a scarcity of regular donors across India.
                We focus on creating &amp; expanding a virtual army of blood donating volunteers who could be 
                searched and contacted by family / care givers of a patient in times of need
            </p>
        </div>
    </div>

    <!-- <div class="contact">
    <CENTER><H1>Contact Us</H1></CENTER>
    <div class="box" >
        <p><br><br><br>Our nation requires 4 Crore Units of Blood while only 40 lakh units are available,
            Every two seconds someone needs Blood. There is no substitute for Human Blood. It cannot be manufactured<br>
            Blood donation is an extremely noble deed, yet there is a scarcity of regular donors across India.
            We focus on creating &amp; expanding a virtual army of blood donating volunteers who could be 
            searched and contacted by family / care givers of a patient in times of need
        </p>
    </div>
    </div> 
    <div class="about">
        <CENTER><H1>About Us</H1></CENTER>
        <div class="box" >
            <p> 
                
            </p>
        </div>
    </div> -->
		
</body>
</html>
