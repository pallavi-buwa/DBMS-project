<!DOCTYPE html>

<html>
    <head>
        <title>Home</title>
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
            <a class="navbar-brand" href="#" style="color: azure;">Vaccination Drive</a>
            <div class="collapse navbar-collapse" id="myNavbar">    
                   <ul class="nav navbar-nav navbar-right"> 
                       <li><a href="sign_up.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>              
                       </ul>     
               </div> 
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
        <form action="action_page.php" method="POST" class="container">
          <center><h2>Log In</h2></center>
      
          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Enter Email" name="email" required>
           
      
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" required>
      
          <button type="button" class="btn btn-primary">Submit</button>
        </form>
      </div>
          
    </body>
</html>