<?php
ini_set('display_errors', 1);
session_start();
if (isset($_SESSION['email']))
{
    session_destroy();
}
header("location:login.php");
?>
 