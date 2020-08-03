<?php session_start(); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PCB</title>
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
        $results_per_page=9;
        $sql="select * from register";
        $exe=mysqli_query($con,$sql);
        $num_of_results=mysqli_num_rows($exe);

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
        $query="select * from register limit ".$start.",".$results_per_page;
        $run=mysqli_query($con,$query);
        
    ?>
    <table>
        <tr>
            <tr>
                <th colspan="12" class="tbl-head">Employee's List</th>
            </tr>
            <th>ID</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Date-Of-Birth</th>
            <th>Gender</th>
            <th>Qualification</th>
            <th>Major</th>
            <th>Designation</th>
            <th>Languages Known</th>
            <th>Change</th>
        </tr>
        
        <?php
    while($row=mysqli_fetch_array($run))
    {
        $id=$row['id'];
        $firstname=$row['firstname'];
        $lastname=$row['lastname'];
        $email=$row['email'];
        $mobile=$row['mobile'];
        $dob=$row['dob'];
        $gender=$row['gender'];
        $qual=$row['qual'];
        $major=$row['major'];
        $des=$row['des'];
        $lang=$row['lang'];
   ?>   <tr>
            <td><?php echo $id; ?></td>
            <td><?php echo $firstname; ?></td>
            <td><?php echo $lastname; ?></td>
            <td><?php echo $email; ?></td>
            <td><?php echo $mobile; ?></td>
            <td><?php echo $dob; ?></td>
            <td><?php echo $gender; ?></td>
            <td><?php echo $qual; ?></td>
            <td><?php echo $major; ?></td>
            <td><?php echo $des; ?></td>
            <td><?php echo $lang; ?></td>
            <td><p><a href="edit.php?id=<?php echo $id; ?>" class="edit"><i class="fa fa-pencil-square-o"></i></a></p></td>
        </tr>   
    <?php } ?>
    </table>
    <br>
    <?php
    $next  = ($page + 1);
    $prev  = ($page - 1);
    if($page != 1){
        echo "<a href='?page=" . $prev . "' class='prev'>&laquo;&nbsp;Prev</a>&emsp;";      
    } 
?>&emsp;<?php
    if($page < $num_of_pages) {
        echo "<a href='?page=" . $next . "' class='next'>Next&nbsp;&raquo;</a>";
    }
    ?>
    </div>
    <?php include "../../footer.php"; ?>
</body>
</html>