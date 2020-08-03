<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PCB | Inspections</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="shortcut icon" href="../../images/pollution.png" type="image/x-icon">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
  <div class="admin-list">
  <table>
    <tr><th colspan="6" class="tbl-head">Inspections</th></tr>
  <tr>
  <th>ID</th>
  <th>Company Name</th>
  <th>Location</th>
  <th>Date</th>
  <th>Inspected By</th>
  <th>Remark</th>
  </tr>
  <?php
    include "../../config.php";
    include "../../head.php";
    include "side.php";

    $query="select * from inspection";
    $run=mysqli_query($con,$query);
    while($roe=mysqli_fetch_assoc($run))
    {
        $id=$roe['id'];
        $name=$roe['name'];
        $location=$roe['location'];
        $date=$roe['date'];
        $inspector=$roe['inspector'];
        $remark=$roe['remark'];
        ?>
        <tr>
        <td><?php echo $id ?></td>
        <td><?php echo $name?></td>
        <td><?php echo $location ?></td>
        <td><?php echo $date ?></td>
        <td><?php echo $inspector ?></td>
        <td><?php echo $remark ?></td>
        </tr>
    <?php }
  ?>
  </table>
  </div>
  <?php include "../../footer.php"; ?>  
</body>
</html>