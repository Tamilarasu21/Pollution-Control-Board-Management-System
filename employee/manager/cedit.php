<?php session_start(); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="shortcut icon" href="../../images/pollution.png" type="image/x-icon">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>PCB | Company</title>
</head>
<body bgcolor="#f7f7f7">
    <center>
        <?php
            include "../../config.php";
            include "../../head.php";
            include "side.php";

            $id=$_GET['id'];
            $sql="select * from company where id='".$id."'";
            $run=mysqli_query($con,$sql);
            while($row=mysqli_fetch_assoc($run))
            {
               $id=$row['id'];
               $name=$row['name'];
               $type=$row['type'];
               $email=$row['email'];
               $website=$row['website']; 
               $tel=$row['tel']; 
               $location=$row['location']; 
            }
        ?>
    </center>
    <div class="cmrg">
        <h2>Company Registration</h2>
        <form action="cupdate.php?id=<?php echo $id ?>" method="post">
           <table>
                <tr>
                    <td><label for="name">Name</label></td>
                    <td>
                        <input type="text" name="name" id="name" placeholder="Company Name" value="<?php echo $name?>">
                    </td>
                </tr>
                <tr>
                    <td><label for="type">Type</label></td>
                    <td>
                        <select name="type" id="type">
                            <option hidden selected disabled>Type</option>
                            <option value="Factory" <?php echo ($type == "Factory") ? "selected": " "?>>Factory</option>
                            <option value="Mill" <?php echo ($type == "Mill") ? "selected": " "?>>Mill</option>
                            <option value="Organisation" <?php echo ($type == "Organisation") ? "selected": " "?>>Organisation</option>
                            <option value="Institution" <?php echo ($type == "Institution") ? "selected": " "?>>Institution</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="email">email</label></td>
                    <td>
                        <input type="email" name="email" id="email" placeholder="Company E-mail" value="<?php echo $email ?>">
                    </td>
                </tr>
                <tr>
                    <td><label for="website">website</label></td>
                    <td>
                        <input type="url" name="website" id="website" placeholder="Website" value="<?php echo $website ?>">
                    </td>
                </tr>
                <tr>
                    <td><label for="tel">Tel</label></td>
                    <td>
                        <input type="tel" name="tel" id="tel" placeholder="phone" value="<?php echo $tel?>" min="10">
                    </td>
                </tr>
                <tr>
                    <td><label for="location">Location</label></td>
                    <td>
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
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="update" name="update"></td>
                </tr>
           </table>           
        </form>
    </div>
    <?php include "../../footer.php"; ?>
</body>
</html>