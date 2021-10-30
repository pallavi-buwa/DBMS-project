<!DOCTYPE html>
<html>
    <head>
        <title>Footer</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
         
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
       
        <style>
            a:link{
                color: black;
            }
            a:visited{
                color: black;
            }
            
        </style>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <footer>   
            <div class="container">
                <div class="row">  
                    <div class="col-xs-4">
                        <h4>Information</h4>
                    </div>
                    <div class="col-xs-4">
                        <h4>My Account</h4>
                    </div>
                    <div class="col-xs-4">
                        <h4>Contact Us</h4>
                      </div>  
                    </div>
                
                <div class="row">  
                    <div class="col-xs-4">
                        <a href="about.php">About Us</a>
                        </div> 
                        <div class="col-xs-4">
                        <a href="#" data-toggle="modal" data-target="#LM"> Login</a> 
                        </div> 
                        <div class="col-xs-4">
                            <p>Contact:+91-123-000000</p>
                        </div> 
                        
                    </div>
                
                <div class="row">  
                    <div class="col-xs-4">
                        <a href="contact.php">Contact us</a>
                    </div>
                        <div class="col-xs-4">
                        <a href="signup.php">Sign up</a>
                        </div>
                        
                        
                    </div>
                
                </div>
             
        </footer>
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
  
      </div>
      
        
        
    </div>
  </div>
</div>
    </body>
</html>
