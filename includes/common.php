<?php
$con= mysqli_connect("localhost", "root", "", "vaccinations");
if(!isset($_SESSION['email']))
{
session_start();
}
?>
        
