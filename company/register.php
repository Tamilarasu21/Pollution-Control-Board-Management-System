<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../images/pollution.png" type="image/x-icon">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>PCB | Company</title>
</head>
<body bgcolor="#f7f7f7">
<?php include "../head.php"; ?>
<div class="side">
        <ul>
            <li><a href="../index.php"><i class="fa fa-dashboard"></i>&nbsp;Dashboard</a></li>
            <li><a href="../about.php"><i class="fa fa-info-circle"></i>&nbsp;About</a></li>
            <li><a href="login.php"><i class="fa fa-industry"></i>&nbsp;Company</a></li>
            <li><a href="../employee/login.php"><i class="fa fa-user-circle"></i>&nbsp;User</a></li>
            <li><a href="../contact.php"><i class="fa fa-envelope"></i>&nbsp;Contact us</a></li>
        </ul>
</div>
    <center>
        <?php
            $fullUrl="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            
            if(strpos($fullUrl, "reg=empty")== true)
            {
                echo "<br><br>";
                echo "<p class='error'>Please fill all the fields</p>";
            }
            elseif(strpos($fullUrl, "reg=email")== true)
            {
                echo "<br><br>";
                echo "<p class='error'>Your E-mail is Invalid</p>";
            }
            elseif(strpos($fullUrl, "reg=nomatch")== true)
            {
                echo "<br><br>";
                echo "<p class='error'>Password's didn't match</p>";
            }
            elseif(strpos($fullUrl, "reg=error")== true)
            {
                echo "<br><br>";
                echo "<p class='error'>An error occurred</p>";
            }
        ?>
    </center>
    <div class="cmrg">
        <h2>Company Registration</h2>
        <form action="reg.php" method="post">
           <table>
                <tr>
                    <td><label for="name">Name</label></td>
                    <td>
                    <?php
                        if(isset($_GET['name']))
                        {
                            $name=$_GET['name'];
                            echo '<input type="text" name="name" id="name" placeholder="Company Name" value="'.$name.'">';
                        }
                        else
                        {
                            echo '<input type="text" name="name" id="name" placeholder="Company Name">';
                        }
                    ?>
                    </td>
                </tr>
                <tr>
                    <td><label for="type">Type</label></td>
                    <td>
                        <?php
                            if(isset($_GET['type']))
                            {
                                $type=$_GET['type'];
                                ?>
                            <select name="type" id="type">
                                <option hidden selected disabled>Type</option>
                                <option value="Factory" <?php echo ($type == "Factory") ? "selected": " "?>>Factory</option>
                                <option value="Mill" <?php echo ($type == "Mill") ? "selected": " "?>>Mill</option>
                                <option value="Organisation" <?php echo ($type == "Organisation") ? "selected": " "?>>Organisation</option>
                                <option value="Institution" <?php echo ($type == "Institution") ? "selected": " "?>>Institution</option>
                            </select>
                                <?php
                            }
                            else
                            {
                                echo '<select name="type" id="type">
                                <option hidden selected disabled>Type</option>
                                <option value="Factory">Factory</option>
                                <option value="Mill">Mill</option>
                                <option value="Organisation">Organisation</option>
                                <option value="Institution">Institution</option>
                            </select>';
                            }
                        ?>
                        
                    </td>
                </tr>
                <tr>
                    <td><label for="email">email</label></td>
                    <td>
                    <?php
                        if(isset($_GET['email']))
                        {
                            $email=$_GET['email'];
                            echo '<input type="email" name="email" id="email" placeholder="Company E-mail" value="'.$email.'">';
                        }
                        else
                        {
                            echo '<input type="email" name="email" id="email" placeholder="Company E-mail">';
                        }
                    ?>
                    </td>
                </tr>
                <tr>
                    <td><label for="website">website</label></td>
                    <td>
                    <?php
                        if(isset($_GET['website']))
                        {
                            $website=$_GET['website'];
                            echo '<input type="url" name="website" id="website" placeholder="Website" value="'.$website.'">';
                        }
                        else
                        {
                            echo '<input type="url" name="website" id="website" placeholder="Website">';
                        }
                    ?>
                    
                    </td>
                </tr>
                <tr>
                    <td><label for="tel">Tel</label></td>
                    <td>
                    <?php
                        if(isset($_GET['tel']))
                        {
                            $tel=$_GET['tel'];
                            echo '<input type="tel" name="tel" id="tel" placeholder="phone" value="'.$tel.'" min="10">';
                        }
                        else
                        {
                            echo '<input type="tel" name="tel" id="tel" placeholder="phone" min="10">';
                        }
                    ?>
                    
                    </td>
                </tr>
                <tr>
                    <td><label for="location">Location</label></td>
                    <td>
                    <?php
                        if(isset($_GET['location']))
                        {
                            $location=$_GET['location'];
                            ?>
                        <select name="location" id="location">
                            <option hidden selected disabled>Location</option>
                            <option value="Chennai" <?php echo ($location == "Chennai") ? "selected": " "?>>Chennai</option>
                            <option value="Bangalore" <?php echo ($location == "Bangalore") ? "selected": " "?>>Bangalore</option>
                            <option value="Mumbai" <?php echo ($location == "Mumbai") ? "selected": " "?>>Mumbai</option>
                            <option value="Pune" <?php echo ($location == "Pune") ? "selected": " "?>>Pune</option>
                            <option value="Delhi" <?php echo ($location == "Delhi") ? "selected": " "?>>Delhi</option>
                            <option value="Coimbatore" <?php echo ($location == "Coimbatore") ? "selected": " "?>>Coimbatore</option>
                            <option value="Kolkata" <?php echo ($location == "Kolkata") ? "selected": " "?>>Kolkata</option>
                        </select>
                            <?php
                        }
                        else
                        {
                            echo '<select name="location" id="location">
                            <option hidden selected disabled>Location</option>
                            <option value="Chennai">Chennai</option>
                            <option value="Bangalore">Bangalore</option>
                            <option value="Mumbai">Mumbai</option>
                            <option value="Pune">Pune</option>
                            <option value="Delhi">Delhi</option>
                            <option value="Coimbatore">Coimbatore</option>
                            <option value="Kolkata">Kolkata</option>
                        </select>';
                        }
                    ?>
                        
                    </td>
                </tr>
                <tr>
                    <td><label for="password">Password</label></td>
                    <td><input type="password" name="password" id="password" placeholder="Password"></td>
                </tr>
                <tr>
                    <td><label for="cpassword">Confirm Password</label></td>
                    <td><input type="password" name="cpassword" id="cpassword" placeholder="Re-enter Password"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="register" name="register"></td>
                </tr>
           </table>
           <p>Already registered? <a href="login.php">Log in</a></p>           
        </form>
    </div>
    <?php include "../footer.php"; ?> 
</body>
</html>