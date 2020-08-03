<?php
session_start();
include "../../head.php";
include "side.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PCB | Change Password</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="shortcut icon" href="../../images/pollution.png" type="image/x-icon">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
<center>
        <?php
            $fullUrl="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            if(strpos($fullUrl, "changePass=success")== true)
            { 
                echo "<br><br><p class='success'>Password Changed Successfully</p>";
            }
            elseif(strpos($fullUrl, "changePass=error")== true)
            {
                echo "<br><br><p class='error'>An Error Occurred</p>";
            }
            elseif(strpos($fullUrl, "changePass=nomatch")== true)
            {
                echo "<br><br><p class='error'>New Passwords didn't match</p>";
            }
            elseif(strpos($fullUrl, "changePass=oldpassnomatch")== true)
            {
                echo "<br><br><p class='error'>old Passwords didn't match</p>";
            }
        ?>
    </center>
<div class="cmlg">
<table>
    <h2>Change Password</h2>
    <form action="changePass.php" method="post">
        <tr>
        <td><label for="oldPassword">Old Password</label></td>
        <td><input type="password" name="oldPassword" id="oldPassword" placeholder="Old Password"></td>
        </tr>
        <tr>
        <td><label for="newPassword">New Password</label></td>
        <td><input type="password" name="newPassword" id="newPassword" placeholder="New Password"></td>
        </tr>
        <tr>
        <td><label for="confirmNewPassword">Confirm New Password</label></td>
        <td><input type="password" name="confirmNewPassword" id="confirmNewPassword" placeholder="Confirm New Password"></td>
        </tr>
        <tr>
        <td></td>
        <td><input type="submit" name="change" value="change"></td>
        </tr> 
    </form>
</table>
</div>
<?php include "../../footer.php" ?>
</body>
</html>
