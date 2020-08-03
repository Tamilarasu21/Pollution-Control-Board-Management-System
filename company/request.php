<?php session_start(); ?>
<!DOCTYPE html>
</html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../images/pollution.png" type="image/x-icon">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>PCB | Request</title>
</head>
<body bgcolor="#f7f7f7">
<?php
include "../config.php";
include "../head.php";
include "side.php";
$sqll="select * from approval where email='".$_SESSION['com']."' and status='0'";
$exe=mysqli_query($con,$sqll);
$rows=mysqli_num_rows($exe);
#--------------------
$sql1="select * from approval where email='".$_SESSION['com']."' and status='1'";
$exe1=mysqli_query($con,$sql1);
$row=mysqli_num_rows($exe1);
#------------------------
if($row == 0 && $rows== 0)
{
    $sql="select * from company where email='".$_SESSION['com']."'";
    $exec=mysqli_query($con,$sql);
    while($row=mysqli_fetch_array($exec))
    {
        $id=$row['id'];
        $name=$row['name'];
        $email=$row['email'];
        $website=$row['website'];
    ?>
    <div class="cmlg">
        <h2>Approval Request</h2>
        <form action="" method="post">
        <table>
        <tr>
            <td><label for="name">Company Name</label></td>
            <td><input type="text" name="name" id="name" value="<?php echo $name ?>"></td>
        </tr>
        <tr>
            <td><label for="name">Company E-mail</label></td>
            <td><input type="email" name="email" id="email" value="<?php echo $email ?>"></td>
        </tr>
        <tr>
            <td><label for="name">Company Website</label></td>
            <td><input type="url" name="website" id="website" value="<?php echo $website ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="Request" value="Request"></td>
        </tr>
        </table>
        </form>
        </div>
    <?php 
    } ?>
    </body>
    </html>
    <?php
    if(isset($_POST['Request']))
    {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $website=$_POST['website'];

        $query="insert into approval(name,email,website) values ('$name','$email','$website')";
        $run=mysqli_query($con,$query);
        if($run)
        {
            header("Location:request.php");
        }
        else
        {
            echo 'failed';
        }
    } 
}
elseif($row == 1)
{
    echo '<div class="approv"><h1>Approved</h1></div>';
}
elseif($rows == 1)
{
   ?>
    <div class="approv">
        <h1>Requested for Approval</h1>
        <form action='' method='post'>
            <button name='cancel'>Cancel Request</button>
        </form>
    </div>
    <?php
    if(isset($_POST['cancel']))
    {
        $sql2="delete from approval where email='".$_SESSION['com']."'";
        $show=mysqli_query($con,$sql2);
        if($show)
        {
            header("Location:request.php");
        }
    }
    
}
?>