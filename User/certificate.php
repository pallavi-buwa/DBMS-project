
<!DOCTYPE html>
<html>

    <head class="noPrint">
        <title class="noPrint"></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="style.css">

    </head>
<center>
    <br>
    <br>
    <br>

    <body>
        <div class="noPrint">
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
              <div class="navbar-header">
                  <a class="navbar-brand" href="./user_dashboard.php">User Dashboard</a>
              </div>
              <ul class="nav navbar-nav">
                  <li ><a href="./user_dashboard.php">Home</a></li>
                  <li><a href="./userRecords.php">User Information</a></li>
                  <li><a href="./bookSlot.php">Book A slot</a></li>
                  <li><a href="./userFaqs.php">FAQs</a></li>
                  <li class="active"><a href="./certificate.php">Print Certificate</a></li>
              </ul>
            </div>
          </nav>
        </div>
        <div class="print" style="width:800px; height:600px; padding:20px; text-align:center; border: 10px solid #787878">
            
            <div style="width:750px; height:550px; padding:20px; text-align:center; border: 5px solid #787878">
                <div>
                    <center>
                <image src="./certificate.jpg"  width="150" height="150">
                    </center>
                </div>
                   <span style="font-size:50px; font-weight:bold">Certificate of Completion</span>
                   <br><br>
                   <span style="font-size:25px"><i>This is to certify that</i></span>
                   <br><br>
                   <span style="font-size:30px"><b>
                       <?php 
                        require 'includes/common.php';
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "vaccine_records";

                        // Create connection
                        $conn = new mysqli($servername, $username, $password, $dbname);
                        // Check connection
                        if ($conn->connect_error) {
                          die("Connection failed: " . $conn->connect_error);
                        }

                        $sql = "SELECT name FROM patient where id ='".$_SESSION['user_id']."'";
                        $result = $conn->query($sql);

                  // output data of each row
                    $row = $result->fetch_assoc();
                    echo "<span style=font-size = 25px>". $row["name"]."</span>";
           
            $conn->close();?>
                       </b></span><br/><br/>
                   <span style="font-size:25px"><i>has taken both doses of the vaccine</i></span> <br/><br/>
                   <span style="font-size:30px">
                        <?php 
                        require 'includes/common.php';
                        $servern = "localhost";
                        $usern = "root";
                        $passw = "";
                        $dbn = "vaccine_records";

                        // Create connection
                        $con = new mysqli($servern, $usern, $passw, $dbn);
                        // Check connection
                        if ($con->connect_error) {
                          die("Connection failed: " . $con->connect_error);
                        }

                        $sql = "select vaccines.type from patient,vaccines where patient.vacc_id=vaccines.vac_id and patient.id='".$_SESSION['user_id']."';";
                        $res = $con->query($sql);

                  // output data of each row
                    $rowa = $res->fetch_assoc();
                    echo "<span style=font-size = 25px>". $rowa["type"]."</span>";
           
            $con->close();?>
                   </span> 
                   
            </div>
            </div>
        
            <br>
            <br>
            <div class="noPrint">
            <button onclick="window.print()" >Generate PDF</button>
            </div>
            <br>
            <br>
            

    </body>
</center>

</html>