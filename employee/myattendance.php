<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../images/pollution.png" type="image/x-icon">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>PCB | My Attendance</title>
</head>
<body>
<?php
    include "../head.php";
    include "side.php";
    include "../config.php"
?>
    <div class="admin-list">
        <table>
            <tr>
                <th class="tbl-head" colspan="2">My Attendance</th>
            </tr>
            <tr>
                <th>Date</th>
                <th>Status</th>
            </tr>
            <?php
                $sql="select * from register where email='".$_SESSION['user']."'";
                $run=mysqli_query($con,$sql);
                while($row=mysqli_fetch_assoc($run))
                {
                  $id=$row['id'];  
                }
                $query="select * from attendance where id='$id'";
                $raw=mysqli_query($con,$query);
                while($rows=mysqli_fetch_array($raw))
                {  
                ?>
            <tr>
                <td><?php echo date('d-m-Y',strtotime($rows['date'])) ?></td>
                <td><?php echo $rows['status'] == 1 ? "Present" : "Absent" ?></td>
            </tr>
                <?php } ?>
        </table>
    </div>
    <?php
        include "../footer.php";
    ?>
</body>
</html>