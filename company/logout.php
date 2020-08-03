<?php
session_start();

if(isset($_SESSION['com']))
{
    session_unset();
    session_destroy();
}
header("Location:../index.php");
?>