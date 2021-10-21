<?php

require 'includes/common.php';

?>

<!DOCTYPE html>

<html>
    <head>
        <title>Patient Record</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
         
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="style.css">

    </head>

    <body>
      <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
          <div class="navbar-header">
              <a class="navbar-brand" href="index.php" style="color: azure;">Vaccination Drive</a>
          </div>

        </div>
      </nav>
      <div class="bg-img">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <form action="search_pt_script.php" method="POST" class="container">
          <center><h2>search</h2></center>
      
          <label for="aad_num"><b>Aadhaar Number</b></label>
          <input type="text" placeholder="Enter aadhar number to search" name="aad_num" required>
          
          <button class="btn btn-primary">Search</button>
        </form>
      </div>
    </body>
</html>
