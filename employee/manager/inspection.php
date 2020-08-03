<?php session_start(); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="shortcut icon" href="../../images/pollution.png" type="image/x-icon">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>PCB | Inspection</title>
</head>
<body bgcolor="#f7f7f7">
<?php
include "../../config.php";
include "../../head.php";
include "side.php"
?>
<center>
    <?php
        $fullUrl="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        if(strpos($fullUrl, "insp=empty")== true)
        { 
            echo "<p class='error'>Please give your Remark..</p>";
        }
        if(strpos($fullUrl, "insp=success")== true)
        {
            echo "<p class='success'>Remark Added!!!</p>";
        }
        if(strpos($fullUrl, "insp=error")== true)
        {
            echo "<p class='error'>An Error Occurred</p>";
        }
    ?>
</center>
<div class="cmlg">
<h2>Inspection</h2>
    <form action="" method="post">
        <table>
            <tr>
                <td><label for="name">Name</label></td>
                <td>
                <?php
                    if(isset($_GET['id']))
                    {
                        $id=$_GET['id'];
                        $ql="select * from company where id='".$id."'";
                        $run=mysqli_query($con,$ql);
                        while($rob=mysqli_fetch_array($run))
                        {
                            $name=ucfirst($rob['name']);
                            $location=ucfirst($rob['location']);
                        }
                    }
                ?>
                    <input type="text" name="name" id="name" value="<?php echo $name;?>">
                </td>
            </tr>
            <tr>
                <td><label for="location">Location</label></td>
                <td> 
                    <input type="text" name="location" id="location" value="<?php echo $location;?>">
                      
                </td>
            </tr>
            <tr>
                <td><label for="inspector">Inspected By</label></td>
                <td>
                    <?php
                        $sql="select * from register where email='".$_SESSION['user']."'";
                        $do=mysqli_query($con,$sql);
                        while($row=mysqli_fetch_assoc($do))
                        {
                            $inspector=ucfirst($row['firstname'])." ".ucfirst($row['lastname']);
                        }
                    ?>
                    <input type="text" name="inspector" id="inspector" value="<?php echo $inspector;?>">
                </td>
            </tr>
            <tr>
                <td><label for="remark">Remark</label></td>
                <td>
                    <textarea name="remark" id="remark" cols="30" rows="10"></textarea>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Generate" value="Generate"></td>
            </tr>
        </table>
    </form>
    </div>
    <?php include "../../footer.php"; ?>
</body>
</html>
<?php
if(isset($_POST['Generate']))
{
    $name=$_POST['name'];
    date_default_timezone_set('Asia/Kolkata');
    $date=date('d-m-Y h:i A');
    $location=$_POST['location'];
    $inspector=$_POST['inspector'];
    $remark=$_POST['remark'];

    if(empty($remark))
    {
        header("location:inspection.php?insp=empty&id=$id");
    }
    else
    {
        $sql="insert into inspection (name,date,location,inspector,remark) values ('$name','$date','$location','$inspector','$remark')";
        $run=mysqli_query($con,$sql);
        if($run)
        {
            header("location:inspection.php?insp=success");
        }
        else
        {
            header("location:inspection.php?insp=error");      
        }
    }
    
}
?>