<?php 
require 'includes/common.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Patient Records Dashboard</title>
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
            <a class="navbar-brand" href="./user_dashboard.php">User Dashboard</a>
          </div>
          <ul class="nav navbar-nav">
            <li><a href="./user_dashboard.php">Home</a></li>
            <li class="active"><a href="./userRecords.php">User Information</a></li>
            <li><a href="./bookSlot.php">Book A slot</a></li>
            <li><a href="./userFaqs.php">FAQs</a></li>
            <li><a href="./certificate.php">Print Certificate</a></li>
          </ul>
        </div>
      </nav>
      <br>
      <br>
      <br>
      <?php $query = "SELECT * from patient where id = '$_SESSION[user_id]'"; 
            $result = mysqli_query($con, $query)or die($con->error);
            $row = array();
            if($result == FALSE){
                echo 'Error in fetching patient data';
            }
            else {
                $row= mysqli_fetch_array($result);
            }
            
            $q1 = "SELECT vacc_id from patient where id = '$_SESSION[user_id]'";
            $vid1 = mysqli_query($con, $q1)or die($con->error);
            if($vid1 == FALSE){
                echo 'Error in fetching vaccination id';
            }
            $vacc_id =mysqli_fetch_row($vid1);
            
            
            $q2 = "SELECT * from vaccination_status1 where vacc_id = '$vacc_id[0]]'"; 
            $res2 = mysqli_query($con, $q2)or die($con->error);
            $row2= mysqli_fetch_row($res2);
            $f1 = 0;
            $f2 = 0;
            if($res2->num_rows == 0){
                $f1 = 1;
                $_SESSION['change'] = 'set';
            }
            
            $q3 = "SELECT * from vaccination_status2 where vacc_id = '$vacc_id[0]]'"; 
            $res3 = mysqli_query($con, $q3)or die($con->error);
            $row3= mysqli_fetch_row($res3);
            
            if($res3->num_rows == 0){
                $f2 = 1;
                $_SESSION['change'] = 'set';
            }
      ?>
      <center>
          <h3>User Information</h3>
      <img src="./file.png">
    </center>
    
      <br>
      <br>
      <center>
      <div class="contain-form">
          <form action="update.php" method="POST">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email" placeholder=" <?= $row['email']?>" readonly="true">
                  </div>
              <div class="form-group col-md-6">
                <label>Name</label>
                <input type="text" class="form-control" name="name1" placeholder=" <?= $row['name']?>" readonly="true">
              </div>
            </div>
            <div class="form-group">
              <label>Address</label>
              <input type="text" class="form-control" name="addr" placeholder=" <?= $row['address']?>" readonly="true">
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label>Aadhar Number</label>
                <input type="text" class="form-control" name="aad" placeholder=" <?= $row['aadhaar']?>" readonly="true">
              </div>
              <div class="form-group col-md-6">
                <label>Phone Number</label>
                <input type="text" class="form-control" name="num" placeholder=" <?= $row['mobile']?>" readonly="true">
              </div>
                <?php if($f1 == 0){ ?>
                    <div class="form-group">
                    <label>First Dose Vaccine</label>
                    <input type="text" class="form-control" name="dose1" placeholder=" <?= $row2[1]?>" readonly="true">
                  </div>
                    <div class="form-group col-md-6">
                    <label>Hospital ID</label>
                    <input type="text" class="form-control" name="id1" placeholder=" <?= $row2[2]?>" readonly="true">
                  </div>
                    <div class="form-group col-md-6">
                    <label>Date</label>
                    <input type="text" class="form-control" name="date1" placeholder=" <?= $row2[3]?>" readonly="true">
                  </div>
                <?php }
                else if($f1 == 1) { ?>
                    <div class="form-group">
                    <label>First Dose Vaccine</label>
                    <input type="text" class="form-control" name="dose1" required="true">
                  </div>
                    <div class="form-group col-md-6">
                    <label>Hospital ID</label>
                    <input type="text" class="form-control" name="id1" required="true">
                  </div>
                    <div class="form-group col-md-6">
                    <label>Date</label>
                    <input type="text" class="form-control" name="date1" required="true">
                  </div>
                <?php } ?>
                <?php if($f2 == 0){?>
                    <div class="form-group">
                    <label>Second Dose Vaccine</label>
                    <input type="text" class="form-control" name="dose2" placeholder=" <?= $row3[1]?>" readonly="true" >
                  </div>
                    <div class="form-group col-md-6">
                    <label>Hospital ID</label>
                    <input type="text" class="form-control" name="id2" placeholder=" <?= $row3[2]?>" readonly="true">
                  </div>
                    <div class="form-group col-md-6">
                    <label>Date</label>
                    <input type="text" class="form-control" name="date2" placeholder=" <?= $row3[3]?>" readonly="true">
                  </div>
                <?php } 
                else if($f2 == 1){ ?>
                    <div class="form-group">
                    <label>Second Dose Vaccine</label>
                    <input type="text" class="form-control" name="dose2" required="true">
                  </div>
                    <div class="form-group col-md-6">
                    <label>Hospital ID</label>
                    <input type="text" class="form-control" name="id2" required="true">
                  </div>
                    <div class="form-group col-md-6">
                    <label>Date</label>
                    <input type="text" class="form-control" name="date2" required="true">
                  </div>
                <?php } ?>
            </div>
              <?php if($f2 == 1 or $f1 == 1){ ?>
            <input  type="submit" name="submit"></input>
              <?php } ?>
          </form>
          <br>
          <br>
      </div>
    </center>
    <br>
      </body>
</html>
