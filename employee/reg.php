<?php
include "../config.php";
if(isset($_POST['signup']))
{
    $firstname=ucfirst($_POST['firstname']);
    $lastname=ucfirst($_POST['lastname']);
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    $qual=$_POST['qual'];
    $major=$_POST['major'];
    $des=$_POST['des'];
    $lang=implode(',',$_POST['lang']);
    $password=md5($_POST['password']);
    $cpassword=md5($_POST['cpassword']);

    if(empty($firstname) || empty($lastname) || empty($email) || empty($mobile) || empty($dob) || empty($gender) || empty($qual) || empty($major) || empty($des) || empty($lang) || empty($password) || empty($cpassword))
    {
        header("Location:register.php?reg=empty&firstname=$firstname&lastname=$lastname&email=$email&mobile=$mobile&dob=$dob&gender=$gender&qual=$qual&major=$major&des=$des&lang=$lang");
        exit();
    }
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        header("Location:register.php?reg=email&firstname=$firstname&lastname=$lastname&email=$email&mobile=$mobile&dob=$dob&gender=$gender&qual=$qual&major=$major&des=$des&lang=$lang");
        exit();
    }
    elseif($password !== $cpassword)
    {
        header("Location:register.php?reg=nomatch&firstname=$firstname&lastname=$lastname&email=$email&mobile=$mobile&dob=$dob&gender=$gender&qual=$qual&major=$major&des=$des&lang=$lang");
        exit();
    }
    else
    {
    $query="Insert into register(firstname,lastname,email,mobile,dob,gender,qual,major,des,lang,password) values('$firstname','$lastname','$email','$mobile','$dob','$gender','$qual','$major','$des','$lang','$password')";
    $run=mysqli_query($con,$query);
        if($run)
        {
            header("Location:login.php?reg=success");
        }
        else
        {
            header("Location:register.php?reg=error&firstname=$firstname&lastname=$lastname&email=$email&mobile=$mobile&dob=$dob&gender=$gender&qual=$qual&major=$major&des=$des&lang=$lang");
            exit();
        }
    }
}

?>