<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PCB | Attendance List</title>
    <link rel="shortcut icon" href="../../images/pollution.png" type="image/x-icon">
    <link rel="stylesheet" href="../../css/style.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
    <?php
        include "../../head.php";
        include "side.php";
        include "../../config.php";

        $sql="select distinct date from attendance";
        $run=mysqli_query($con,$sql);
        echo '<div class="admin-list"><table><tr><th colspan="2" class="tbl-head">Attendance</th></tr></table></div>';
        while($row=mysqli_fetch_array($run))
        {
            $onedate = $row['date']; ?>
            <div class="admin-list">
          <table>
                <tr>
                    <th colspan="2">Date : <?php echo date('d-m-Y',strtotime($onedate)) ?></th>
                </tr>
                <tr>
                    <?php
                        $query="select * from attendance where date='".$onedate."'";
                        $exe=mysqli_query($con,$query);
                        while($raw=mysqli_fetch_array($exe))
                        {
                    ?>
                    <td><?php echo $raw['username'] ?></td>
                    <td><?php echo $raw['status']==1 ? "Present" : "Absent"; ?></td>
                </tr>
                        <?php } ?>
          </table>
          </div>
          
        <?php
    }
    echo "<br><br>";
    include "../../footer.php";
    ?>
</body>
</html>