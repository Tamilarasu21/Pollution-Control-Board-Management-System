<div class="side">
<ul>
    <a href="profile.php" style="color:skyblue;text-decoration:none">
    <li><br><i class="fa fa-user-circle fa-2x"></i><br><br>
    <?php
    include "../../config.php"; 
    if(isset($_SESSION['user']))
    {
        $sql="select * from register where email='".$_SESSION['user']."'";
        $ex=mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($ex))
        {
            $fname=ucfirst($row['firstname']);
            $lname=ucfirst($row['lastname']);
            echo $fname." ".$lname;
        }
    }
    ?></a>
    </li>
    <li><a href="index.php"><i class="fa fa-dashboard"></i>&nbsp;Dashboard</a></li>
    <li><a href="list.php"><i class="fa fa-list"></i>&nbsp;User List</a></li>
    <li><a href="attendancelist.php"><i class="fa fa-database"></i>&nbsp;Attendance list</a></li>
    <li><a href="companies.php"><i class="fa fa-industry"></i>&nbsp;Companies</a></li>
    <li><a href="requests.php"><i class="fa fa-envelope"></i>&nbsp;Requests</a></li>
    <li><a href="approved.php"><i class="fa fa-check-circle"></i>&nbsp;Approved</a></li>
    <li><a href="inspections.php"><i class="fa fa-eye"></i>&nbsp;Inspections</a></li>
    <li><a href="myattendance.php"><i class="fa fa-bars"></i>&nbsp;My Attendance</a></li>
    <li><a href="settings.php"><i class="fa fa-gear"></i>&nbsp;Settings</a></li>
    <li><a href="../logout.php"><i class="fa fa-sign-out"></i>&nbsp;Logout</a></li>
</ul>
</div>