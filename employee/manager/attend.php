<?php
include "../../config.php";
if(isset($_POST['done']))
{
    if(empty($_POST['status']))
    {
        header("Location:attendance.php?attend=empty");
    }
    else
    {
        foreach($_POST['status'] as $i => $status)
        {
            $id=$_POST['id'][$i];
            $username=$_POST['username'][$i];
            $role=$_POST['role'][$i];

            $query="select * from attendance where date=CURDATE()";
            $run=mysqli_query($con,$query);
            $num_date=mysqli_num_rows($run);

            $stm="select * from register";
            $exec=mysqli_query($con,$stm);
            $num=mysqli_num_rows($exec);
            if($num_date > $num)
            {
                header("Location:attendance.php?attend=already");
            }
            else
            {
                $sql="insert into attendance (id,username,role,date,status) values('$id','$username','$role',CURDATE(),'$status')";
                $exe=mysqli_query($con,$sql);
                if($exe)
                {
                    header("Location:attendance.php?attend=success");
                }
                else
                {
                    header("Location:attendance.php?attend=error");
                }
            }
        }
    }   
}
?>