<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">

    <link rel="shortcut icon" href="images/pollution.png" type="image/x-icon">

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <title>PCB | Contact</title>

</head>

<body bgcolor="#f7f7f7">

    <?php

    include "head.php";

    include "side.php";

    ?>

    <?php

        $fulUrl="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

        if(strpos($fulUrl,"contact=success")==true)

        {

            echo "<br><br>";

            echo "<center><p class='success'>Mail Sent!!!</p></center>";

        }

        elseif(strpos($fulUrl,"contact=failed")==true)

        {

            echo "<br><br>";

            echo "<center><p class='error'>Mail Not Sent!!!</p></center>";

        }

    ?>

    <div class="cmlg">

        <center>

        <form action="" method="post">

            <h2>Contact us</h2>

            <table>                

                <tr>

                <td><label for="">Name</label></td>

                <td><input type="text" name="name" placeholder="Your Name"></td>

                </tr>

                <tr>

                <td><label for="">Email</label></td>

                <td><input type="email" name="email" placeholder="Your Email"></td>

                </tr>

                <tr>

                <td><label for="">Subject</label></td>

                <td><input type="text" name="subject" placeholder="Subject"></td>

                </tr>

                <tr>

                <td><label for="">Message</label></td>

                <td><textarea name="message" id="message" cols="10" rows="5" placeholder="Message"></textarea></td>

                </tr>

                <tr>

                <td></td>

                <td><input type="submit" value="send" name="send"></td>

                </tr>

            </table>

        </form>

        <?php

            if(isset($_POST['send']))

            {   

                $to="example@gmail.com";

                $subject=$_POST['subject'];

                $message="";

                $message.="From : ".$_POST['email']."\n";

                $message.="Name : ".$_POST['name']."\n";

                $message.=$_POST['message'];

                if(mail($to,$subject,$message))

                {

                    header("location:contact.php?contact=success");

                }

                else

                {

                    header("location:contact.php?contact=failed");

                }

            }

        ?>

    </center>

    </div>

    <?php include "footer.php"; ?> 

</body>

</html>

