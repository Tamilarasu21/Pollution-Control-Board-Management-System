<?php
session_start();
include "../../config.php";
$id=$_GET['id'];
$sql="update approval set status='1' where id='".$id."'";
$run=mysqli_query($con,$sql);
if($run)
{
    header("Location:requests.php");
}
else
{
    echo "failed to approve";
}
?>