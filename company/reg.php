<?php
include "../config.php";

if(isset($_POST['register']))
{
    $name=$_POST['name'];
    $type=$_POST['type'];
    $email=$_POST['email'];
    $website=$_POST['website'];
    $tel=$_POST['tel'];
    $location=$_POST['location'];
    $password=md5($_POST['password']);
    $cpassword=md5($_POST['cpassword']);

    if(empty($name) || empty($type) || empty($email) || empty($website) || empty($tel) || empty($location) || empty($password) || empty($cpassword))
    {
        header("location:register.php?reg=empty&name=$name&type=$type&email=$email&website=$website&tel=$tel&location=$location");
        exit();
    }
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        header("Location:register.php?reg=email&name=$name&type=$type&email=$email&website=$website&tel=$tel&location=$location");
        exit();
    }
    if($password == $cpassword)
    {
        $query="insert into company (name,type,email,website,tel,location,password) values('$name','$type','$email','$website','$tel','$location','$password')";
        $run=mysqli_query($con,$query);
        if($run)
        {
            header("Location:login.php?reg=success");
        }
        else
        {
            header("Location:register.php?reg=error&name=$name&type=$type&email=$email&website=$website&tel=$tel&location=$location");
        }
    }
    else
    {
        header("Location:register.php?reg=nomatch&name=$name&type=$type&email=$email&website=$website&tel=$tel&location=$location");
    }
}
?>
