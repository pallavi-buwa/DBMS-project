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
                    <input type="text" class="form-control" name="email">
                  </div>
              <div class="form-group col-md-6">
                <label>Name</label>
                <input type="text" class="form-control" name="name1" >
              </div>
            </div>
            <div class="form-group">
              <label>Address</label>
              <input type="text" class="form-control" name="addr">
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label>Aadhar Number</label>
                <input type="text" class="form-control" name="aad">
              </div>
              <div class="form-group col-md-6">
                <label>Phone Number</label>
                <input type="text" class="form-control" name="num" >
              </div>
            </div>
            <input  type="submit" name="submit"></input>
          </form>
          <br>
          <br>
      </div>
    </center>
    <br>
      </body>
</html>
