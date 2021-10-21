<?php

require 'includes/common.php';
$email= mysqli_real_escape_string($con,$_POST['email']);
$password=mysqli_real_escape_string($con,$_POST['psw']);
//$password= md5($password);


$sq="SELECT pt_id,password,email FROM Login WHERE password='$password'";
$sq_result=mysqli_query($con,$sq) or die(mysqli_error($con));
$rows= mysqli_num_rows($sq_result);




if($rows==0)
{
    header('location: login_ad.php');
}
 else
{
    $row= mysqli_fetch_array($sq_result);
    if(($email != $row['email']) && ($password==$row['password']))
    {
        header('location: login_ad.php');
    }
    else if(($email == $row['email']) && ($password!=$row['password']))
    {
        header('location: login_ad.php');
    }
    else
    {
        $_SESSION['email']=$email;
        $_SESSION['user_id']=$row['pt_id'];
    
        header('location: admin_dashboard.php');
    }
}
?>






