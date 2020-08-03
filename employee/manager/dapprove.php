<?php
include "../../config.php";
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $sql="delete from approval where id='".$id."'";
    $run=mysqli_query($con,$sql);
    if($run)
    {
        header("Location:requests.php");
    }
    else
    {
        echo "failed to delete";
    }
}

?>