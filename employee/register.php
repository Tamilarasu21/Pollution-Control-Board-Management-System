<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../images/pollution.png" type="image/x-icon">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>PCB | Register</title>
</head>
<body>
<?php include "../head.php"; ?>
<div class="side">
    <ul>
        <br><br>
        <li><a href="../index.php"><i class="fa fa-dashboard"></i>&nbsp;Dashboard</a></li>
        <li><a href="../about.php"><i class="fa fa-info-circle"></i>&nbsp;About</a></li>
        <li><a href="../company/login.php"><i class="fa fa-industry"></i>&nbsp;Company</a></li>
        <li><a href="login.php"><i class="fa fa-user-circle"></i>&nbsp;User</a></li>
        <li><a href="../contact.php"><i class="fa fa-envelope"></i>&nbsp;Contact us</a></li>
    </ul>
</div>
<div class="reg">
    <center>
    <?php
        $fullUrl="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        
        if(strpos($fullUrl, "reg=empty")== true)
        {
            echo "<br>";
            echo "<p class='error'>Please fill all the fields</p>";
        }
        elseif(strpos($fullUrl, "reg=email")== true)
        {
            echo "<br>";
            echo "<p class='error'>Your E-mail is Invalid</p>";
        }
        elseif(strpos($fullUrl, "reg=nomatch")== true)
        {
            echo "<br>";
            echo "<p class='error'>Password's didn't match</p>";
        }
        elseif(strpos($fullUrl, "reg=error")== true)
        {
            echo "<br>";
            echo "<p class='error'>An error occurred</p>";
        }
    ?>
        <form action="reg.php" method="post">
            <table>
                <tr><td><span>REGISTER</span></td></tr>
                <tr>
                    <td><label for="firstname">First Name</label></td>
                    <td>
                    <?php
                        if(isset($_GET['firstname']))
                        {
                            $first=$_GET['firstname'];
                            echo "<input type='text' name='firstname' id='firstname' placeholder='First Name' value='".$first."'>";
                        }
                        else
                        {
                            echo '<input type="text" name="firstname" id="firstname" placeholder="First Name">';
                        }
                    ?>
                   </td>
                    <td><label for="lastname">Last Name</label></td>
                    <td>
                    <?php
                        if(isset($_GET['lastname']))
                        {
                            $last=$_GET['lastname'];
                            echo "<input type='text' name='lastname' id='lastname' placeholder='Last Name' value='".$last."'>";
                        }
                        else
                        {
                            echo '<input type="text" name="lastname" id="lastname" placeholder="Last Name">';
                        }
                    ?>
                    </td>
                </tr>
                <tr>
                    <td><label for="email">Email</label></td>
                    <td>
                        <?php
                            if(isset($_GET['email']))
                            {
                                $email=$_GET['email'];
                                echo '<input type="email" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="Email" value="'.$email.'">';
                            }
                            else
                            {
                                echo '<input type="email" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="Email">';
                            }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td><label for="mobile">Mobile Number</label></td>
                    <td>
                    <?php
                        if(isset($_GET['mobile']))
                        {
                            $mobile=$_GET['mobile'];
                            echo ' <input type="tel" name="mobile" id="mobile" pattern="[5-9]{1}[0-9]{2}[0-9]{3}[0-9]{4}" minlength="10" placeholder="Mobile number" value="'.$mobile.'">';
                        }
                        else
                        {
                            echo '<input type="tel" name="mobile" id="mobile" pattern="[5-9]{1}[0-9]{2}[0-9]{3}[0-9]{4}" minlength="10" placeholder="Mobile number">';
                        }
                        ?>
                   </td>
                </tr>
                <tr>
                    <td><label for="dob">Date of Birth</label></td>
                    <td>
                    <?php
                        if(isset($_GET['dob']))
                        {
                            $dob=$_GET['dob'];
                            
                            echo '<input type="date" name="dob" id="dob" min="1990-01-01" max="2001-12-31" value="'.$dob.'">';
                            
                        }
                        else
                        {
                            echo '<input type="date" name="dob" id="dob" min="1990-01-01" max="2001-12-31">';
                        }
                    ?>
                    </td>
                </tr>
                <tr>
                    <td><label for="gender">Gender</label></td>
                    <td>
                    <?php
                        if(isset($_GET['gender']))
                        {
                            $gender=$_GET['gender'];?>
                        <p><input type="radio" name="gender" value="female" <?php echo ($gender == 'female') ? 'checked' : ''; ?>><label>Female</label></p>
                        <p><input type="radio" name="gender" value="male" <?php echo ($gender == 'male') ? 'checked' : ''; ?>><label>Male</label></p>
                        <p><input type="radio" name="gender" value="others" <?php echo ($gender == 'others') ? 'checked' : ''; ?>><label>Others</label></p>
                        <?php    
                        }
                        else
                        {
                            echo '<p><input type="radio" name="gender" value="female"><label>Female</label></p>
                            <p><input type="radio" name="gender" value="male"><label>Male</label></p>
                            <p><input type="radio" name="gender" value="others"><label>Others</label></p>';
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td><label for="qual">Qualification</label></td>
                    <td>
                    <?php
                        if(isset($_GET['qual']))
                        {
                            $qual=$_GET['qual'];
                            ?>
                            <select name="qual" id="qual" class="qual">
                            <option selected disabled hidden>Select</option>
                                <option value="BE" <?php if($qual=="BE"){echo "selected";}?>>BE</option>
                                <option value="Bsc" <?php if($qual=="Bsc"){echo "selected";}?>>B.Sc</option>
                                <option value="Btech" <?php if($qual=="Btech"){echo "selected";}?>>B.Tech</option>
                                <option value="Others" <?php if($qual=="Others"){echo "selected";}?>>Others</option>
                            </select>
                        <?php 
                        }
                        else
                        {
                            echo '<select name="qual" id="qual" class="qual">
                            <option selected disabled hidden>Select</option>
                                <option value="BE">BE</option>
                                <option value="Bsc">B.Sc</option>
                                <option value="Btech">B.Tech</option>
                                <option value="Others">Others</option>
                            </select>';
                        }
                    ?>
                    
                    </td>
                    <td><label for="major">Major</label></td>
                    <td>
                    <?php
                        if(isset($_GET['major']))
                        {
                            $major=$_GET['major'];
                            ?>
                            <select name="major" id="major" class="major">
                            <option selected disabled hidden>Select</option>
                            <option value="Chemical Engineering" <?php if($major=="Chemical Engineering"){echo "selected";}?>>Chemical Engineering</option>
                            <option value="Computer Application" <?php if($major=="Computer Application"){echo "selected";}?>>Computer Application</option>
                            <option value="Network Engineering" <?php if($major=="Network Engineering"){echo "selected";}?>>Network Engineering</option>
                            <option value="Maths" <?php if($major=="Maths"){echo "selected";}?>>Maths</option>
                            <option value="Others" <?php if($major=="Others"){echo "selected";}?>>Others</option>
                            </select>
                        <?php
                        }
                        else
                        {
                            echo '<select name="major" id="major" class="major">
                            <option selected disabled hidden>Select</option>
                            <option value="Chemical Engineering">Chemical Engineering</option>
                            <option value="Computer Application">Computer Application</option>
                            <option value="Network Engineering">Network Engineering</option>
                            <option value="Maths">Maths</option>
                            <option value="Others">Others</option>
                            </select>';
                        }
                    ?>  
                    </td>
                </tr>
                <tr>
                    <td><label for="des">Designation</label></td>
                    <td>
                    <?php
                        if(isset($_GET['des']))
                        {
                            $des=$_GET['des'];
                            ?>
                            <select name="des" id="des" class="des">
                            <option selected disabled hidden>Select</option>
                            <option value="Technical Assistant" <?php if($des=="Technical Assistant"){echo "selected";}?>>Technical Assistant</option>
                            <option value="Scientist" <?php if($des=="Scientist"){echo "selected";}?>>Scientist</option>
                            <option value="Manager" <?php if($des=="Manager"){echo "selected";}?>>Manager</option>
                            <option value="Lab Assistant" <?php if($des=="Lab Assistant"){echo "selected";}?>>Lab Assistant</option>
                            <option value="Accountant" <?php if($des=="Accountant"){echo "selected";}?>>Accountant</option>
                            <option value="System Analyst" <?php if($des=="System Analyst"){echo "selected";}?>>System Analyst</option>
                            <!-- <option value="System Admin" <?php //if($des=="System Admin"){echo "selected";}?>>System Admin</option> -->
                        </select>
                            <?php
                        }
                        else
                        {
                            echo '<select name="des" id="des" class="des">
                            <option selected disabled hidden>Select</option>
                            <option value="Technical Assistant">Technical Assistant</option>
                            <option value="Scientist">Scientist</option>
                            <option value="Manager">Manager</option>
                            <option value="Lab Assistant">Lab Assistant</option>
                            <option value="Accountant">Accountant</option>
                            <option value="System Analyst">System Analyst</option>';
                            //<option value="System Admin">System Admin</option>
                        echo '</select>';
                        }
                    ?>                       
                    </td>
                </tr>
                <tr>
                    <td><label for="lang">Languages Known</label></td>
                    <td>
                    <?php 
                        if(isset($_GET['lang']))
                        {
                            $lang=explode(',',$_GET['lang']);
                            ?>
                        <p><input type="checkbox" name="lang[]" value="Tamil" <?php echo in_array("Tamil",$lang)? "checked": ""; ?>><span class="check"></span><label>Tamil</label></p>
                        <p><input type="checkbox" name="lang[]" value="English" <?php echo in_array("English",$lang)? "checked": ""; ?>><span class="check"></span><label>English</label></p>
                        <p><input type="checkbox" name="lang[]" value="Hindi" <?php echo in_array("Hindi",$lang)? "checked": ""; ?>><span class="check"></span><label>Hindi</label></p>
                        <p><input type="checkbox" name="lang[]" value="Telugu" <?php echo in_array("Telugu",$lang)? "checked": ""; ?>><span class="check"></span><label>Telugu</label></p>
                        <?php
                        }
                        else
                        {
                            echo '<p><input type="checkbox" name="lang[]" value="Tamil"><span class="check"></span><label>Tamil</label></p>
                            <p><input type="checkbox" name="lang[]" value="English"><span class="check"></span><label>English</label></p>
                            <p><input type="checkbox" name="lang[]" value="Hindi"><span class="check"></span><label>Hindi</label></p>
                            <p><input type="checkbox" name="lang[]" value="Telugu"><span class="check"></span><label>Telugu</label></p>';
                        }
                    ?>
                    </td>
                </tr>
                <tr>
                <td><label for="password">Password</label></td>
                <td>
                    <input type="password" name="password" id="password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,}">
                </td>
                <td><label for="password">Password</label></td>
                <td>
                    <input type="password" name="cpassword" id="cpassword" placeholder="Re-enter Password">
                </td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr align="center">
                    <td></td>
                    <td><input type="submit" name="signup" value="Sign Up"></td>
                    <td></td>
                </tr>
            </table>
        </form>
    <h3>Already Registered ?&emsp;<a href="login.php">Login</a></h3>
    </center>
</div>
<?php include "../footer.php"; ?> 
</body>
</html>