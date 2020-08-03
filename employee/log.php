<?php
include "../config.php";
session_start();

if(isset($_POST['login']))
{
    $email=$_POST['email'];
    $password=md5($_POST['password']);
    
    $exe_admin=mysqli_query($con,"select * from register where email='".$email."' and password='".$password."' and des='System Admin'");
    $exe_manager=mysqli_query($con,"select * from register where email='".$email."' and password='".$password."' and des='Manager'");
    $exe_tech=mysqli_query($con,"select * from register where email='".$email."' and password='".$password."' and des='Technical Assistant'");
    $exe_sci=mysqli_query($con,"select * from register where email='".$email."' and password='".$password."' and des='Scientist'");
    $exe_lab=mysqli_query($con,"select * from register where email='".$email."' and password='".$password."' and des='Lab Assistant'");
    $exe_acc=mysqli_query($con,"select * from register where email='".$email."' and password='".$password."' and des='Accountant'");
    $exe_sys=mysqli_query($con,"select * from register where email='".$email."' and password='".$password."' and des='System Analyst'");
    
    if(mysqli_num_rows($exe_admin)==1)
    {
        $_SESSION['user']=$email;
        header("Location:admin/index.php");
    }
    elseif(mysqli_num_rows($exe_manager)==1)
    {
        $_SESSION['user']=$email;
        header("Location:manager/index.php");
    }
    elseif(mysqli_num_rows($exe_tech)==1)
    {
        $_SESSION['user']=$email;
        header("Location:index.php");
    }
    elseif(mysqli_num_rows($exe_sci)==1)
    {
        $_SESSION['user']=$email;
        header("Location:index.php");
    }
    elseif(mysqli_num_rows($exe_lab)==1)
    {
        $_SESSION['user']=$email;
        header("Location:index.php");
    }
    elseif(mysqli_num_rows($exe_acc)==1)
    {
        $_SESSION['user']=$email;
        header("Location:index.php");
    }
    elseif(mysqli_num_rows($exe_sys)==1)
    {
        $_SESSION['user']=$email;
        header("Location:index.php");
    }
    else
    {
        header("Location:login.php?login=error");
    }
}
?>