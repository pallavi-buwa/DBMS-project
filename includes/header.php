<!DOCTYPE html>

<html>
    <head>
        <title>Header</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
         
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        
        <style>
            a:link{
                color: whitesmoke;
            }
            a:visited{
                color: whitesmoke;
            }
            
        </style>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
       <div class="navbar navbar-default navbar-fixed-top"> 
           <div class="container">       
               <div class="navbar-header">    
                   <button type="button" class="navbar-toggle" data-toggle="collapse" datatarget="#myNavbar">         
                       <span class="icon-bar"></span>            
                       <span class="icon-bar"></span>           
                       <span class="icon-bar"></span>       
                   </button>           
                   <a class="navbar-brand" href="index.php">Digi-Library</a>       
               </div>     
               <div class="collapse navbar-collapse" id="myNavbar">    
                   <ul class="nav navbar-nav navbar-right">            
     <?php              
     if (isset($_SESSION['email']))
        {      
         ?>                   
            <li><a href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a></li>    
            <li><a href = "settings.php"><span class = "glyphicon glyphicon-user"></span> Settings</a></li>           
            <li><a href = "logout.php"><span class = "glyphicon glyphicon-log-out"></span> Logout</a></li>                
        <?php
            } 
      
    
      else {   
         ?>
            <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>        
            <li><a href="#" data-toggle="modal" data-target="#LM"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> 
            <li><a href="about.php"><span class="glyphicon glyphicon-book"></span> About Us</a></li>
            <li><a href="contact.php"><span class="glyphicon glyphicon-phone"></span> Contact Us</a></li>
        <?php
        }       
        ?>
         
                   </ul>     
               </div>   
           </div>
       </div>
        <div class="modal fade" id="LM" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class='col-12 modal-title text-center' id="LM">LOGIN</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Don't have an account? <a style="color: blue" href="signup.php">Register</a></p>
        <form method="POST" action="login_submit.php">
                                <div class="form-group">
                                    <input type="email" class="form-control"  placeholder="Email" name="email" required = "true">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" name="password" required = "true">
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary">Login</button>

                            </form>
        <br>
        <p><a style="color: blue" href="forgot.php">Forgot Password?</a></p>
      </div>
      
        
               
    </div>
  </div>
</div>
    </body>
</html>
