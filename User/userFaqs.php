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
            <li><a href="./userRecords.php">User Information</a></li>
            <li><a href="./bookSlot.php">Book A slot</a></li>
            <li class="active"><a href="./userFaqs.php">FAQs</a></li>
            <li><a href="./certificate.php">Print Certificate</a></li>
          </ul>
        </div>
      </nav>
      <center>
      <br>
      <br>
      <img src = "./faq.jpg" alt="alt text">
      <br>
      <br>
      <div class="faq">
          <center>
              <p id="size" class="size">We encourage you to rely on reputable sources of information to help you
                 make informed choices and stay up to date on the latest information about COVID-19 vaccines.</p>

                <p id="size" class="size">The information below can help you make informed decisions – and get information from a 
                    trusted source. Our medical advisors provide these answers. </p>
          </center>
          
          <?php
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

                $sql = "SELECT serial_no,question,answer FROM faqs";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    echo "<h2 style=background-color:LightGray>"."Question ". $row["serial_no"]."</h2>" ."<br>"."<h2 style=color:Tomato;>". " Question: " . $row["question"]."</h2>"."<br>". "<h2 style=color:MediumSeaGreen;>"." Answer: ". $row["answer"]."</h2>" ."<br><br>";
                  }
                } else {
                  echo "0 results";
                }
            $conn->close();
            ?>

      </div>
    </center>
      </body>
</html>