<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../images/pollution.png" type="image/x-icon">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>PCB | Settings</title>
</head>
<body>
<?php 
    include "../head.php";
    include "side.php";
?>
<div class="sett">
    <div class="setList">
        <ul>
            <li>
            <div class="settings">
                <center>
                <a href="profile.php"><i class="fa fa-user fa-4x"></i><p>My Profile</p></a>
                </center>
            </div>
            </li>
            <li>
            <div class="settings">
                <center>
                <a href="changePassword.php"><i class="fa fa-asterisk fa-4x"></i><p>Change Password</p></a>
                </center>
            </div>
            </li>
        </ul>
    </div>
</div>
    <?php include "../footer.php" ?>
</body>
</html>