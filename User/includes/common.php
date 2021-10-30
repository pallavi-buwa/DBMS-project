<?php
$con= mysqli_connect("localhost", "root", "", "vaccine_records");
if(!isset($_SESSION['email']))
{
session_start();
}
?>
        
