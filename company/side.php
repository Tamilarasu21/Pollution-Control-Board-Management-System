<div class="side">
    <ul>
        <li><br><i class="fa fa-user-circle fa-2x"></i><br><br>
        <?php 
        if(isset($_SESSION['com']))
        {
            $sql="select * from company where email='".$_SESSION['com']."'";
            $ex=mysqli_query($con,$sql);
            while($row=mysqli_fetch_array($ex))
            {
                $name=ucfirst($row['name']);
                echo $name;
            }
        }?>
        </li>
        <li><a href="index.php"><i class="fa fa-dashboard"></i>&nbsp;Dashboard</a></li>
        <li><a href="request.php"><i class="fa fa-check-circle-o"></i>&nbsp;Approval</a></li>
        <li><a href="inspection.php"><i class="fa fa-eye"></i>&nbsp;Inspection</a></li>
        <li><a href="logout.php"><i class="fa fa-sign-out"></i>&nbsp;Logout</a></li>
    </ul>
</div>