<!DOCTYPE html>
<html>
    <head>
        <title>Patient Records Dashboard</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
         
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="../style.css">

    </head>
    <body>
      <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">User Dashboard</a>
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
      <center>
          <h3>User Information</h3>
      <img src="./file.png">
    </center>
    
      <br>
      <br>
      <center>
      <div class="contain-form">
          <form action="" method="POST">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Email Id">
                  </div>
              <div class="form-group col-md-6">
                <label>Name</label>
                <input type="text" class="form-control" name="name" placeholder="Name">
              </div>
            </div>
            <div class="form-group">
              <label>Address</label>
              <input type="text" class="form-control" name="addr" placeholder="Enter Address">
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputCity">City</label>
                <input type="text" class="form-control" name="city">
              </div>
              <div class="form-group col-md-6">
                <label for="inputZip">Dose 1 Status</label>
                <input type="text" class="form-control" name="dose1">
              </div>
              <div class="form-group col-md-6">
                <label for="inputZip">Dose 2 Status</label>
                <input type="text" class="form-control" name="dose2" >
              </div>
            </div>
            <input  type="submit" name="submit">Edit Information</input>
          </form>
          <?php
                require 'includes/common.php';
                $servern = "localhost";
                $usern = "root";
                $passw = "";
                $dbn = "vaccine_records";
                $con=new mysqli($servern,$usern,$passw,$dbn);
                $name1=filter_input(INPUT_GET, 'name');
                $addr=filter_input(INPUT_GET, 'addr');
                $dose1=filter_input(INPUT_GET, 'dose1');
                $dose2=filter_input(INPUT_GET, 'dose2');
                $email=filter_input(INPUT_GET, 'email');
                $city=filter_input(INPUT_GET, 'city');
                if($con->connect_error){
                        echo 'Connection Faild: '.$con->connect_error;
                   }
                else{
                    
                    $query = "UPDATE patient,login set patient.name='$name1', patient.address = '$addr', login.email='$email' WHERE login.email ='".$_SESSION['email']."'and patient.id= login.pt_id;";
                    $result = mysqli_query($con, $query)or die($con->error);
                    if($result){
                        echo "<script type='text/javascript'>alert('Updated successfully');</script>";
                    }
                }
                $con->close();
          ?>
          <br>
          <br>
      </div>
    </center>
    <br>
      </body>
</html>
