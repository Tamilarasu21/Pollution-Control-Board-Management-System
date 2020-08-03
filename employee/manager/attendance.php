<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Tamilarasu">
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="../../images/pollution.png" type="image/x-icon">
    <link rel="stylesheet" href="../../css/style.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>PCB | Attendance</title>
</head>
<body>
    <?php
    include "../../config.php";
    include "../../head.php";
    include "side.php";
    ?>
    <div class="admin-list">
    <?php
        $fullUrl="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        if(strpos($fullUrl,'attend=success')==true)
        {
            echo "<br><center><p class='success'>Attendance Taken Successfully</p></center>";
        }else if(strpos($fullUrl,'attend=error')==true)
        {
            echo "<br><center><p class='error'>Error Occurred</p></center>";
        }else if(strpos($fullUrl,'attend=already')==true)
        {
            echo "<br><center><p class='error'>Attendance Already Taken</p></center>";
        }
        else if(strpos($fullUrl,'attend=empty')==true)
        {
            echo "<br><center><p class='error'>Please Take Attendance!!!</p></center>";
        }
    ?>
    <form action="attend.php" method="post">
    <table>
    <tr>
    <th class="tbl-head" colspan="4">
    Attendance
    </th>
    </tr>
    <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Role</th>
    <th>Attendance</th>
    </tr>
    <?php
    $query="select * from register";
    $run=mysqli_query($con,$query);
    $counter=0;
    while($row=mysqli_fetch_array($run))
    { ?>
    <tr>
        <td><?php echo $row['id']?></td>
        <td><?php echo ucfirst($row['firstname'])." ".ucfirst($row['lastname']) ?></td>
        <td><?php echo $row['des']?></td>
        <td>
            <input type="radio" name="status[<?php  echo $counter; ?>]" value="1"><label for="status">&check;</label>
            &emsp;&emsp;
            <input type="radio" name="status[<?php echo $counter; ?>]" value="0"><label for="status">&times;</label>
        </td>
    </tr>
    <input type="hidden" name="id[]" value="<?php echo $row['id']?>">
    <input type="hidden" name="username[]" value="<?php echo ucfirst($row['firstname'])." ".ucfirst($row['lastname']) ?>">
    <input type="hidden" name="role[]" value="<?php echo $row['des']?>">
    <?php 
    $counter++;
    }
    ?>
    </form>
    </table>
    <br>
    
    <input type="submit" name="done" value="done">
    </div>
    <br><br>
    <?php include "../../footer.php" ?>
</body>
</html>