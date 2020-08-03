<?php
session_start();
include "../../config.php";
if(isset($_POST['update']))
{
    $cid=$_GET['id'];
    $name=$_POST['name'];
    $type=$_POST['type'];
    $email=$_POST['email'];
    $website=$_POST['website'];
    $tel=$_POST['tel'];
    $location=$_POST['location'];

    $query="update company set name='".$name."',type='".$type."',email='".$email."',website='".$website."',tel='".$tel."',location='".$location."' where id='".$cid."'";
    $exec=mysqli_query($con,$query);
    if($run)
    {
        header("Location:companies.php?update=success");
    }
    else
    {
        header("Location:companies.php?update=error");
    }
}

?>