<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="shortcut icon" href="../../images/pollution.png" type="image/x-icon">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>PCB | Requests</title>
</head>
<body>
    <?php
        include "../../config.php";
        include "../../head.php";
        include "side.php";
    ?>
    <div class="admin-list">
    <table>
    <tr>
    <th colspan="5" class="tbl-head">Requests for Approval</th>
    </tr>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>E-mail</th>
        <th>Website</th>
        <th>Task</th>
    </tr>
    <?php
    $sql="select * from approval where status='0'";
    $run=mysqli_query($con,$sql);
    while($bow=mysqli_fetch_array($run))
    {
        $id=$bow['id'];
        $name=$bow['name'];
        $email=$bow['email'];
        $website=$bow['website'];
    ?>
    <tr>
    <td><?php echo $id ?></td>
    <td><?php echo $name ?></td>
    <td><?php echo $email ?></td>
    <td><?php echo $website ?></td>
    <td><center><a href="approve.php?id=<?php echo $id ?>" class="approve"><i class="fa fa-check-circle"></i>&nbsp;Approve</a>&emsp;<a href="dapprove.php?id=<?php echo $id?>" class="delete"><i class="fa fa-trash"></i>&nbsp;Delete</a></center></td>
    </tr>
    <?php } ?>
    </table>
    </div>
    <?php include "../../footer.php"; ?>
</body>
</html>