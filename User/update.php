<?php
                require 'includes/common.php';
                $servern = "localhost";
                $usern = "root";
                $passw = "";
                $dbn = "vaccine_records";
                $con=new mysqli($servern,$usern,$passw,$dbn);
                //$name1=filter_input(INPUT_POST, 'name1');
                //$addr=filter_input(INPUT_POST, 'addr');
                //$aad=filter_input(INPUT_POST, 'aad');
                //$num=filter_input(INPUT_POST, 'num');
                //$email=filter_input(INPUT_POST, 'email');
                if(isset($_SESSION['change'])){
                    $dose1=filter_input(INPUT_POST, 'dose1');
                    $id1=filter_input(INPUT_POST, 'id1');
                    $date1=filter_input(INPUT_POST, 'date1');
                    $dose2=filter_input(INPUT_POST, 'dose2');
                    $id2=filter_input(INPUT_POST, 'id2');
                    $date2=filter_input(INPUT_POST, 'date2');
                }
                
                if($con->connect_error){
                        echo 'Connection Failed: '.$con->connect_error;
                }
                else if($date1 < $date2){
                    echo ("<script LANGUAGE='JavaScript'>
                        window.alert('Invalid information please try again');
                        window.location.href='userRecords.php';
                        </script>");
                }
                else{
                    //$query = "UPDATE patient,login set patient.name='$name1', patient.address = '$addr' WHERE login.pt_id ='".$_SESSION['user_id']."'and patient.id= login.pt_id;";
                    //$query = "UPDATE patient SET name = '$name1', address = '$addr',aadhaar = $aad,mobile = '$num' WHERE id = '".$_SESSION['user_id']."' ;"; 
                    
                    if($dose1 != "" and $id1 != "" and $date1 != ""){
                        $query = "INSERT INTO vaccination_status1(type, h_id,date_taken) values ('$dose1', '$id1', '$date1')";
                        //$query = "UPDATE patient SET name = '$name1', address = '$addr',aadhaar = $aad,mobile = '$num' WHERE id = '".$_SESSION['user_id']."' ;"; 
                        $result = mysqli_query($con, $query)or die($con->error);

                        if($result ===true){
                            /*echo ("<script LANGUAGE='JavaScript'>
                            window.alert('Succesfully Updated');
                            window.location.href='userRecords.php';
                            </script>");*/
                            
                            $last_id = mysqli_insert_id($con);
                            $temp = $_SESSION['user_id'];
                            echo 'LAST IDDDDDDDD';
                            echo $last_id;
                            echo 'TEMPPP';
                            echo $temp;
                            
                            $query = "UPDATE patient SET vacc_id = '$last_id' where id = '$temp'"; 
                            $result = mysqli_query($con, $query)or die($con->error);
                            //$query = "INSERT INTO patient(vac_id) values ('$last_id') where id = '$temp'";
               
                            if($dose2 != "" and $id2 != "" and $date2 != ""){
                                $query = "INSERT INTO vaccination_status2(vacc_id, type, h_id,date_taken) values ('$last_id','$dose2', '$id2', '$date2')";
                                $result = mysqli_query($con, $query)or die($con->error);
                               if($result){
                                    echo ("<script LANGUAGE='JavaScript'>
                                    window.alert('Succesfully Updated');
                                    window.location.href='userRecords.php';
                                    </script>");
                                }
                                else {
                                    echo ("<script LANGUAGE='JavaScript'>
                                    window.alert('Error occured in  getting vacc_id please try again');
                                    window.location.href='userRecords.php';
                                    </script>");
                                }
                            }
                            
                            else {
                                echo ("<script LANGUAGE='JavaScript'>
                                window.alert('Error occured in  getting vacc_id please try again');
                                window.location.href='userRecords.php';
                                </script>");
                            }
                        }
                    }
                    else{
                        echo ("<script LANGUAGE='JavaScript'>
                        window.alert('Error occured please try again');
                        window.location.href='userRecords.php';
                        </script>");
                    }
                }
                $con->close();
          
