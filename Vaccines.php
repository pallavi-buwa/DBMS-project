<?php

require 'includes/common.php';

?>

<!DOCTYPE html>

<html>
    <head>
        <title>Vaccines</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
         
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="style.css">

    </head>

    <body  class="bg-img">
      <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
          <div class="navbar-header">
              <a class="navbar-brand" href="index.php" style="color: azure;">Vaccination Drive</a>
          </div>

        </div>
      </nav>
        <div>
        <br>
        <br>
        <br>
        <center><h2>Vaccines</h2></center>
        
        <?php
     
        $selectq="SELECT * FROM vaccines";
        $selectq_result= mysqli_query($con, $selectq) or die(mysqli_error($con));
        $num_rows= mysqli_num_rows($selectq_result);
        if($num_rows==0)
        {
            echo "No records to view!";
        ?>
        <br>
            
        <?php
            echo "<a href='admin_dashboard.php' style='color: blue'>Back</a>";
        }
        
        else 
        {
        ?>       
   
        <br>
        <div class="container_form">
       
            <div class="table-responsive" style="overflow-y:scroll; height:200px;">
                <center>
                
                    <table class="table table-striped">
                        <tbody>
                            <tr> 
                                <th>ID</th>
                                <th>Type</th>          
                            </tr>

                            <?php 
                             while ($row = mysqli_fetch_array($selectq_result))
                            {
                                 echo "<tr> <td>".$row['vac_id']."</td> <td>".$row['type']."</td> </tr>";
                            }
                            ?>                      
                        </tbody>
                    </table>    
           
                </center>
            </div> 
            <div class="btn_style">
            <a class="btn btn-dark" href="admin_dashboard.php" role="button">Back</a>
        </div>
        
        </div> 
        <br>
        
        <?php 
        }
        ?>
        
        
      </div>
        
      
      
    </body>
</html>
