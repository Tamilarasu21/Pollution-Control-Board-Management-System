<div class="main">
    <ul>
        <li>
            <div class="one">
            <?php
                include "../config.php";
                $query="select * from register";
                $exe=mysqli_query($con,$query);
                $enum=mysqli_num_rows($exe);
                ?>
                <h3><i class="fa fa-users fa-2x"></i>&nbsp;Employees</h3>
                <h2><?php echo $enum?></h2>
            </div>
        </li>
        <li>
            <?php
                include "../config.php";
                $query="select * from company";
                $exe=mysqli_query($con,$query);
                $cnum=mysqli_num_rows($exe);
            ?>
            <div class="two">
                <h3><i class="fa fa-industry fa-2x"></i>&nbsp;Companies</h3>
                <h2><?php echo $cnum?></h2>
            </div>
        </li>
        <li>
            <div class="three">
            <?php
                include "../config.php";
                $query="select * from approval";
                $exe=mysqli_query($con,$query);
                $cnum=mysqli_num_rows($exe);
                ?>
                <h3><i class="fa fa-envelope fa-2x"></i>&nbsp;Approvals</h3>
                <h2><?php echo $cnum?></h2>
            </div>
        </li>
    </ul>
</div>