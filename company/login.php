<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../images/pollution.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>PCB | Company</title>
</head>
<body bgcolor="#f7f7f7">
    <?php 
        include "../head.php";
    ?>
    <div class="side">
        <ul>
            <li><br><br><a href="../index.php"><i class="fa fa-dashboard"></i>&nbsp;Dashboard</a></li>
            <li><a href="../about.php"><i class="fa fa-info-circle"></i>&nbsp;About</a></li>
            <li><a href="login.php"><i class="fa fa-industry"></i>&nbsp;Company</a></li>
            <li><a href="../employee/login.php"><i class="fa fa-user-circle"></i>&nbsp;User</a></li>
            <li><a href="../contact.php"><i class="fa fa-envelope"></i>&nbsp;Contact us</a></li>
        </ul>
    </div>
    <center>
        <?php 
            $fullUrl="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            
            if(strpos($fullUrl, "reg=success")== true)
            {
                echo "<br><br>";
                echo "<p class='success'>You're successfully registered!</p>";
            }
            elseif(strpos($fullUrl, "log=empty")== true)
            {
                echo "<br><br>";
                echo "<p class='error'>Please fill all the fields</p>";
            }
            elseif(strpos($fullUrl, "log=error")== true)
            {
                echo "<br><br>";
                echo "<p class='error'>An error occurred</p>";
            }
        ?>
    </center>    
    <div class="cmlg">
        <h2>Company Login</h2>
        <form action="log.php" method="post">
            <table>
                <tr>
                    <td><label for="email">E-mail</label></td>
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
                    <td><label for="password">Password</label></td>
                    <td><input type="password" name="password" id="password" placeholder="Password"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="login" id="login" value="login"></td>
                </tr>
            </table>
            <p>new user? <a href="register.php">sign up</a></p>
        </form>
    </div>
    <?php include "../footer.php"; ?> 
</body>
</html>