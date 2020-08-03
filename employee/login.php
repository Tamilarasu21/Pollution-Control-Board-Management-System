<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../images/pollution.png" type="image/x-icon">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>PCB | Login</title>
</head>
<body bgcolor="#f7f7f7">
    <?php 
        include "../head.php"; 
    ?>
    <div class="side">
    <ul>
        <li><br><br><a href="../index.php"><i class="fa fa-dashboard"></i>&nbsp;Dashboard</a></li>
        <li><a href="../about.php"><i class="fa fa-info-circle"></i>&nbsp;About</a></li>
        <li><a href="../company/login.php"><i class="fa fa-industry"></i>&nbsp;Company</a></li>
        <li><a href="login.php"><i class="fa fa-user-circle"></i>&nbsp;User</a></li>
        <li><a href="../contact.php"><i class="fa fa-envelope"></i>&nbsp;Contact us</a></li>
    </ul>
</div>
    <center>
        <?php
            $fullUrl="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            if(strpos($fullUrl, "reg=success")== true)
            { 
                echo "<br><br><p class='success'>You're successfully registered!</p>";
            }
            if(strpos($fullUrl, "login=error")== true)
            {
                echo "<br><br><p class='error'>An Error Occurred</p>";
            }
        ?>
    </center>
    <div class="cmlg">
        <form action="log.php" method="post">
            <table>
                    <h2>User Login</h2>
                <tr>
                    <td><label for="email">Email</label></td>
                    <td><input type="email" name="email" id="email" placeholder="Email"></td>
                </tr>
                <tr>
                    <td><label for="password">Password</label></td>
                    <td><input type="password" name="password" id="password" placeholder="Password"></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="login" value="Log in"></td>
                </tr>
            </table>
        </form>
        <p>&emsp;Not registered yet ?&emsp;<a href="register.php">Register now</a></p>
    </div>
    <?php include "../footer.php"; ?>
</body>
</html>
