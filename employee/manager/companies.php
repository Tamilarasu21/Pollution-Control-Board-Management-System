<?php session_start(); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PCB | Companies</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="shortcut icon" href="../../images/pollution.png" type="image/x-icon">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
    <div class="admin-list">
    <?php
    include "../../config.php";
    include "../../head.php";
    include "side.php";
    
    #we can change the results upon our choice
    $results_per_page=6;
    //-----------------
    $sql="select * from company";
    $run=mysqli_query($con,$sql);
    $num_of_results=mysqli_num_rows($run);
    $num_of_pages=ceil($num_of_results/$results_per_page);
    if(!isset($_GET['page']))
    {
        $page=1;
    }
    else
    {
        $page=$_GET['page'];
    }
    $start=($page-1)*$results_per_page;
    $query="select * from company limit ".$start.",".$results_per_page;
    $ans=mysqli_query($con,$query);
    ?>
    <table>
    <tr>
    <tr>
        <th colspan="8" class="tbl-head">Companies</th>
    </tr>
    <th>ID</th>
    <th>Name</th>
    <th>Type</th>
    <th>E-mail</th>
    <th>Website</th>
    <th>Phone</th>
    <th>Location</th>
    <th>Modifications</th>
    </tr>
    <tr>
    <?php
    while($arr=mysqli_fetch_array($ans))
    {
        $id=$arr['id'];
        $name=$arr['name'];
        $type=$arr['type'];
        $email=$arr['email'];
        $website=$arr['website'];
        $tel=$arr['tel'];
        $location=$arr['location'];
    ?>
    <td><?php echo $id ?></td>
    <td><?php echo $name ?></td>
    <td><?php echo $type ?></td>
    <td><?php echo $email ?></td>
    <td><?php echo $website ?></td>
    <td><?php echo $tel ?></td>
    <td><?php echo $location ?></td>
    <td><p><a href="cedit.php?id=<?php echo $id ?>" class="edit"><i class="fa fa-pencil-square"></i>&nbsp;Edit</a>&emsp;<a href="inspection.php?id=<?php echo $id; ?>" class="insp"><i class="fa fa-check-circle"></i>&nbsp;Inspect</a></p></td>
    </tr>
    <?php } ?>
     </table>
     <br>
     <?php
     $prev=$page-1;
     $next=$page+1;
     if($page !=1)
     {
         echo "<a href='?page=".$prev."' class='prev'>&laquo;Prev</a>";
     }
     if($page < $num_of_pages)
     {
         echo "<a href='?page=".$next."' class='next'>Next&raquo;</a>";
     }
     ?>
     </div>
     <?php include "../../footer.php"; ?>
</body>
</html>