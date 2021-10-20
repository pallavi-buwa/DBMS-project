<?php

require 'includes/common.php';

$password=mysqli_real_escape_string($con,$_POST['psw']);


$email=mysqli_real_escape_string($con,$_POST['email']);
$pattern3="/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/";

$contact=mysqli_real_escape_string($con,$_POST['number']);
$pattern2="^\d{10}$";
        
$address=mysqli_real_escape_string($con,$_POST['add']);
$name=mysqli_real_escape_string($con,$_POST['name']);
$aadhar=mysqli_real_escape_string($con,$_POST['aadhar']);
$age=mysqli_real_escape_string($con,$_POST['age']);
$gender=mysqli_real_escape_string($con,$_POST['gender']);


if(!preg_match($pattern3, $email))
{
    header('location: signup.php?email_error=enter a valid email'); 
}

if(!preg_match($pattern2, $contact))
{
    header('location: signup.php?contact_error=enter a valid contact'); 
}

//$password=md5($password);

$search_query="SELECT pt_id, password FROM Patient WHERE email='$email'";
$search_result= mysqli_query($con, $search_query);
$rows= mysqli_num_rows($search_result);
$roww= mysqli_fetch_array($search_result);

if($rows>0)
{
    if($password!=$roww['password'])
    {
        header('location: signup.php?email_error=this email is already registered');
    }
    else if($password==$roww['password'])
    {
        header('location:./User/user_dashboard.html'); 
    }
    
}
 else 
 {
     $user_reg_query="INSERT INTO Patient(name,mobile,email,address,aadhar,age,gender)values('$name','$contact','$email','$address','$aadhar','$age', '$gender')";  
     $user_reg_submit= mysqli_query($con, $user_reg_query) or die(mysqli_error($con));
     
     $user_reg_query1="INSERT INTO Login(email,password)values('$email','$password')";  
     $user_reg_submit1= mysqli_query($con, $user_reg_query1) or die(mysqli_error($con));
      
     $_SESSION['user_id']=$roww['pt_id'];
     $_SESSION['email']=$email;
     
     header('location:./User/user_dashboard.html');        
             
 }
    
 ?>



