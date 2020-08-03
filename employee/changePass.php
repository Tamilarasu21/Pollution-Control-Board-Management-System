<?php
session_start();
include "../config.php";
if(isset($_POST['change']))
{
    $oldPassword=md5($_POST['oldPassword']);
    $newPassword=md5($_POST['newPassword']);
    $confirmNewPassword=md5($_POST['confirmNewPassword']);
    $sql="select * from register where email='".$_SESSION['user']."'";
    $run=mysqli_query($con,$sql);
    while($rope=mysqli_fetch_assoc($run))
    {
    $Password=$rope['password'];
    }
    if($oldPassword == $Password)
    {
        if($newPassword == $confirmNewPassword)
        {
            $query="update register set password='".$newPassword."' where email='".$_SESSION['user']."'";
            $exe=mysqli_query($con,$query);
            if($exe)
            {
                header("location:changePassword.php?changePass=success");
            }
            else
            {
                header("location:changePassword.php?changePass=error");
            }
        }
        else
        {
            header("location:changePassword.php?changePass=nomatch");
        }
    }
    else
    {
        header("location:changePassword.php?changePass=oldpassnomatch");
    }
}
?>
