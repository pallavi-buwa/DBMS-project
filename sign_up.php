<!DOCTYPE html>

<html>

<head>
  <title>Sign Up</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

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
        <div class="collapse navbar-collapse" id="myNavbar">    
                   <ul class="nav navbar-nav navbar-right"> 
                       
                       <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>        
                       </ul>     
               </div> 
      </div>

    </div>
  </nav>
  <div class="bg-img">
    <br>
    <br>
    <br>
    
    <form action="action_register_page.php" class="container" method = "POST">
      <center>
        <h2>Sign Up</h2>
      </center>


      <label for="name"><b>Name</b></label>
      <input type="text" placeholder="Enter Name" name="name" required>

      <label for="add"><b>Address</b></label>
      <input type="text" placeholder="Enter Address" name="add" required>

      <label for="number"><b>Number</b></label>
      <input type="number" placeholder="Enter Number" name="number" required>

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>
      
      <label for="aadhar"><b>Aadhar card number</b></label>
      <input type="number" placeholder="Enter Aadhar Number" name="aadhar" required>
      
      <label for="age"><b>Age</b></label>
      <input type="number" placeholder="Enter Age" name="age" required>
      
      <label for="gender"><b>Gender</b></label>
      <input type="text" placeholder="Enter Gender" name="gender" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <button type="submit" class="btn">Submit</button>
    </form>
  </div>

</body>

</html>