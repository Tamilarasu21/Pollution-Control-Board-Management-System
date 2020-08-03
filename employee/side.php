<div class="side">
<ul>
    <a href="profile.php" style="color:skyblue;text-decoration:none"><li><br><i class="fa fa-user-circle fa-2x"></i><br><br><?php 
    if(isset($_SESSION['user']))
    {
        include "../config.php";
        $sql="select * from register where email='".$_SESSION['user']."'";
        $ex=mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($ex))
        {
            $fname=ucfirst($row['firstname']);
            $lname=ucfirst($row['lastname']);
            echo $fname." ".$lname;
        }
    }?></li></a>
    <li><a href="index.php"><i class="fa fa-dashboard"></i>&nbsp;Dashboard</a></li>
    <li><a href="myattendance.php"><i class="fa fa-line-chart"></i>&nbsp;My Attendance</a></li>
    <li><a href="settings.php"><i class="fa fa-gear"></i>&nbsp;Settings</a></li>
    <li><a href="logout.php"><i class="fa fa-sign-out"></i>&nbsp;Logout</a></li>
</ul>
</div>