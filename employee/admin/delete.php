<?php
include "../../config.php";
session_start();
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $query="delete from register where id='".$id."'";
    $rec=mysqli_query($con,$query);
    if($rec)
    {
        header("Location:list.php?delete=success");
    }
    else
    {
        header("Location:list.php?delete=error");
    }
}
?>