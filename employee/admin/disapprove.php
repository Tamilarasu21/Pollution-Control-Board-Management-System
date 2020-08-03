<?php
session_start();
include "../../config.php";
$id=$_GET['id'];
$sql="update approval set status='0' where id='".$id."'";
$run=mysqli_query($con,$sql);
if($run)
{
    header("Location:approved.php");
}
else
{
    echo "failed to approve";
}
?>