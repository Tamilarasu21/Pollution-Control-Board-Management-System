<?php
session_start();
include "../../config.php";

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
        header("location:inspection.php?insp=empty");
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