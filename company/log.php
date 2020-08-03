<?php
 session_start(); 
include "../config.php";
if(isset($_POST['login']))
{
    $email=$_POST['email'];
    $password=md5($_POST['password']);

    if(empty($email) || empty($password))
    {
        header("Location:login.php?log=empty&email=$email");
    }
    else
    {
        $query="select * from company where email='".$email."' and password='".$password."'";
        $run=mysqli_query($con,$query);
        $rows=mysqli_num_rows($run);
        if($rows == 1)
        {
            $_SESSION['com']=$email;
            header("Location:index.php");
        }
        else
        {
            header("Location:login.php?log=error&email=$email");
        }
    }
}

?>
