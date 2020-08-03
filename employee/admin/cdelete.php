<?php
session_start();
include "../../config.php";
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $query="delete from company where id='".$id."'";
    $rec=mysqli_query($con,$query);
    if($rec)
    {
        header("Location:companies.php?delete=success");
    }
    else
    {
        header("Location:companies.php?delete=error");
    }
}

