<?php
include "../config.php";
session_start();

if(isset($_POST['update']))
{
    $u_id=$_GET['id'];
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    $qual=$_POST['qual'];
    $major=$_POST['major'];
    $des=$_POST['des'];
    $lang=implode(',',$_POST['lang']);

    $query="update register set firstname='".$firstname."', lastname='".$lastname."', email='".$email."', mobile='".$mobile."', dob='".$dob."', gender='".$gender."', qual='".$qual."', major='".$major."', des='".$des."', lang='".$lang."' where email='".$_SESSION['user']."'";
    $run=mysqli_query($con,$query);
    if($run)
    {
        header("Location:profile.php?update=success");
    }
    else
    {
        header("Location:profile.php?update=error");
    }
}

?>