<?php
                require 'includes/common.php';
                $servern = "localhost";
                $usern = "root";
                $passw = "";
                $dbn = "vaccine_records";
                $con=new mysqli($servern,$usern,$passw,$dbn);
                $name1=filter_input(INPUT_POST, 'name1');
                $addr=filter_input(INPUT_POST, 'addr');
                $aad=filter_input(INPUT_POST, 'aad');
                $num=filter_input(INPUT_POST, 'num');
                $email=filter_input(INPUT_POST, 'email');
                if($con->connect_error){
                        echo 'Connection Faild: '.$con->connect_error;
                   }
                else{
                    
                    
                    //$query = "UPDATE patient,login set patient.name='$name1', patient.address = '$addr' WHERE login.pt_id ='".$_SESSION['user_id']."'and patient.id= login.pt_id;";
                    $query = "UPDATE patient SET name = '$name1', address = '$addr',aadhaar = $aad,mobile = '$num' WHERE id = '".$_SESSION['user_id']."' ;"; 
                    $result = mysqli_query($con, $query)or die($con->error);
                    
                    if($result ===true){
                        echo ("<script LANGUAGE='JavaScript'>
                        window.alert('Succesfully Updated');
                        window.location.href='userRecords.php';
                        </script>");
                    }
                    else{
                        echo ("<script LANGUAGE='JavaScript'>
                        window.alert('Error occured please try again');
                        window.location.href='userRecords.php';
                        </script>");
                    }
                }
                $con->close();
          
