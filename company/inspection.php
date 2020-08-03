<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PCB</title>
    <link rel="shortcut icon" href="../images/pollution.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
<div class="admin-list">
<table>
    <tr>
        <th colspan="4" class="tbl-head">Inspections</th>
    </tr>
    <tr>
        <th>ID</th>
        <th>Date</th>
        <th>Inspected By</th>
        <th>Remark</th>
    </tr>
    <?php
        include "../config.php";
        include "../head.php";
        include "side.php";
        
        $sql="select * from company where email='".$_SESSION['com']."'";
        $rub=mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($rub))
        {
            $name=$row['name'];
            $query="select * from inspection where name='".$name."'";
            $exec=mysqli_query($con,$query);
            while($rows=mysqli_fetch_assoc($exec))
            {
                $id=$rows['id'];
                $date=$rows['date'];
                $inspector=$rows['inspector'];
                $remark=$rows['remark'];
    ?>
            <tr>
                <td><?php echo $id; ?></td>
                <td><?php echo $date; ?></td>
                <td><?php echo $inspector; ?></td>
                <td><?php echo $remark; ?></td>
            </tr>
            <?php
        }
    }
    ?>
    </table>
    </div>
</body>
</html>