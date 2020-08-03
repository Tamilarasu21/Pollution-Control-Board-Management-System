<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="../images/pollution.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>PCB | My Profile</title>
</head>
<body>
<div class="reg">
    <?php
    include "../config.php";
    include "../head.php";
    include "side.php";

       $sql="select * from register where email='".$_SESSION['user']."'";
       $exec=mysqli_query($con,$sql);
        while($bob=mysqli_fetch_assoc($exec))
        {
            $id=$bob['id'];
            $firstname=$bob['firstname'];
            $lastname=$bob['lastname'];
            $email=$bob['email'];
            $mobile=$bob['mobile'];
            $dob=$bob['dob'];
            $gender=$bob['gender'];
            $qual=$bob['qual'];
            $major=$bob['major'];
            $des=$bob['des'];
            $lang=explode(',',$bob['lang']);
        }
    ?>
    <center>
        <form action="profileupdate.php" method="post">
            <table>
                <tr><td><span>EDIT</span></td></tr>
                <tr>
                    <td><label for="firstname">First Name</label></td>
                    <td>
                    <input type='text' name='firstname' id='firstname' placeholder='First Name' value='<?php echo $firstname;?>'>
                    </td>
                    <td><label for="lastname">Last Name</label></td>
                    <td>
                        <input type='text' name='lastname' id='lastname' placeholder='Last Name' value='<?php echo $lastname;?>'>
                    </td>
                </tr>
                <tr>
                    <td><label for="email">Email</label></td>
                    <td>
                        <input type="email" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="Email" value="<?php echo $email;?>">
                    </td>
                </tr>
                <tr>
                    <td><label for="mobile">Mobile Number</label></td>
                    <td>
                        <input type="tel" name="mobile" id="mobile" pattern="[5-9]{1}[0-9]{2}[0-9]{3}[0-9]{4}" minlength="10" placeholder="Mobile number" value="<?php echo $mobile;?>">
                    </td>
                </tr>
                <tr>
                    <td><label for="dob">Date of Birth</label></td>
                    <td>
                        <input type="date" name="dob" id="dob" min="1990-01-01" max="2001-12-31" value="<?php echo $dob;?>">
                    </td>
                </tr>
                <tr>
                    <td><label for="gender">Gender</label></td>
                    <td>
                        <p><input type="radio" name="gender" value="female" <?php echo ($gender == 'female') ? 'checked' : ''; ?>><label>Female</label></p>
                        <p><input type="radio" name="gender" value="male" <?php echo ($gender == 'male') ? 'checked' : ''; ?>><label>Male</label></p>
                        <p><input type="radio" name="gender" value="others" <?php echo ($gender == 'others') ? 'checked' : ''; ?>><label>Others</label></p>
                    </td>
                </tr>
                <tr>
                    <td><label for="qual">Qualification</label></td>
                    <td>
                        <select name="qual" id="qual" class="qual">
                            <option selected disabled hidden>Select</option>
                                <option value="BE" <?php if($qual=="BE"){echo "selected";}?>>BE</option>
                                <option value="Bsc" <?php if($qual=="Bsc"){echo "selected";}?>>B.Sc</option>
                                <option value="Btech" <?php if($qual=="Btech"){echo "selected";}?>>B.Tech</option>
                                <option value="Others" <?php if($qual=="Others"){echo "selected";}?>>Others</option>
                        </select>
                    </td>
                    <td><label for="major">Major</label></td>
                    <td>
                    
                            <select name="major" id="major" class="major">
                            <option selected disabled hidden>Select</option>
                            <option value="Chemical Engineering" <?php if($major=="Chemical Engineering"){echo "selected";}?>>Chemical Engineering</option>
                            <option value="Computer Application" <?php if($major=="Computer Application"){echo "selected";}?>>Computer Application</option>
                            <option value="Network Engineering" <?php if($major=="Network Engineering"){echo "selected";}?>>Network Engineering</option>
                            <option value="Maths" <?php if($major=="Maths"){echo "selected";}?>>Maths</option>
                            <option value="Others" <?php if($major=="Others"){echo "selected";}?>>Others</option>
                            </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="des">Designation</label></td>
                    <td>
                            <select name="des" id="des" class="des">
                            <option selected disabled hidden>Select</option>
                            <option value="Technical Assistant" <?php if($des=="Technical Assistant"){echo "selected";}?>>Technical Assistant</option>
                            <option value="Scientist" <?php if($des=="Scientist"){echo "selected";}?>>Scientist</option>
                            <option value="Manager" <?php if($des=="Manager"){echo "selected";}?>>Manager</option>
                            <option value="Lab Assistant" <?php if($des=="Lab Assistant"){echo "selected";}?>>Lab Assistant</option>
                            <option value="Accountant" <?php if($des=="Accountant"){echo "selected";}?>>Accountant</option>
                            <option value="System Analyst" <?php if($des=="System Analyst"){echo "selected";}?>>System Analyst</option>
                            <option value="System Admin" <?php if($des=="System Admin"){echo "selected";}?>>System Admin</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="lang">Languages Known</label></td>
                    <td>
                        <p><input type="checkbox" name="lang[]" value="Tamil" <?php echo in_array("Tamil",$lang)? "checked": ""; ?>><span class="check"></span><label>Tamil</label></p>
                        <p><input type="checkbox" name="lang[]" value="English" <?php echo in_array("English",$lang)? "checked": ""; ?>><span class="check"></span><label>English</label></p>
                        <p><input type="checkbox" name="lang[]" value="Hindi" <?php echo in_array("Hindi",$lang)? "checked": ""; ?>><span class="check"></span><label>Hindi</label></p>
                        <p><input type="checkbox" name="lang[]" value="Telugu" <?php echo in_array("Telugu",$lang)? "checked": ""; ?>><span class="check"></span><label>Telugu</label></p>
                        </td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr align="center">
                    <td></td>
                    <td><input type="submit" name="update" value="update"></td>
                    <td></td>
                </tr>
            </table>
        </form>
    </center>
</div>
<?php include "../footer.php"; ?>
</body>
</html>