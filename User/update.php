<?php
                require 'includes/common.php';
                $servern = "localhost";
                $usern = "root";
                $passw = "";
                $dbn = "vaccinations";
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
                    if($dose1 != "" and $id1 != "" and $date1 != "" and $dose2 != "" and $id2 != "" and $date2 != ""){
                        if(strcasecmp($dose1, $dose2) != 0){
                            echo ("<script LANGUAGE='JavaScript'>
                            window.alert('Invalid information please try again');
                            window.location.href='userRecords.php';
                            </script>");
                        }
                    }
                }
                
                if($con->connect_error){
                        echo 'Connection Failed: '.$con->connect_error;
                }
                if($dose1 != "" and $id1 != "" and $date1 != "" and $dose2 != "" and $id2 != "" and $date2 != ""){
                    if(strcasecmp($date1, $date2)>0){
                        echo ("<script LANGUAGE='JavaScript'>
                            window.alert('Invalid information 2 please try again');
                            window.location.href='userRecords.php';
                            </script>");
                    }
                    else {
                        goto cont;
                    }
                }
                else{
                    cont:
                    //$query = "UPDATE patient,login set patient.name='$name1', patient.address = '$addr' WHERE login.pt_id ='".$_SESSION['user_id']."'and patient.id= login.pt_id;";
                    //$query = "UPDATE patient SET name = '$name1', address = '$addr',aadhaar = $aad,mobile = '$num' WHERE id = '".$_SESSION['user_id']."' ;"; 
                    
                    if($dose1 != "" and $id1 != "" and $date1 != ""){
                        $get_id = "SELECT vac_id FROM vaccines where type = '$dose1'";
                        $result_id= mysqli_query($con, $get_id)or die($con->error);
                        $id_arr= mysqli_fetch_row($result_id);
                        $dose_id = $id_arr['vac_id'];
                        $query_true = "SELECT * FROM hospital_vacc where vac_id = '$dose_id' and h_id = '$id1'";
                        $result_true = mysqli_query($con, $query_true)or die($con->error);
                        
                        if($result_true == FALSE){
                            echo ("<script LANGUAGE='JavaScript'>
                            window.alert('Error occured 3 please try again');
                            window.location.href='userRecords.php';
                            </script>");
                        }
                        $query = "INSERT INTO vaccination_status1(type, h_id,date_taken) values ('$dose1', '$id1', '$date1')";
                        $query2 = "UPDATE patient vacc_id = '$id1' where id = '".$_SESSION['user_id']."' ;"; 
                        $result = mysqli_query($con, $query)or die($con->error);
                        

                        if($result ===true){
                            /*echo ("<script LANGUAGE='JavaScript'>
                            window.alert('Succesfully Updated');
                            window.location.href='userRecords.php';
                            </script>");*/
                            
                            $last_id = mysqli_insert_id($con);
                            $temp = $_SESSION['user_id'];
                            /*echo 'LAST IDDDDDDDD';
                            echo $last_id;
                            echo 'TEMPPP';
                            echo $temp;*/
                            
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
                                    window.alert('Error occured in 4 getting vacc_id please try again');
                                    window.location.href='userRecords.php';
                                    </script>");
                                }
                            }
                            
                            else {
                                echo ("<script LANGUAGE='JavaScript'>
                                window.alert('Error occured in 5 getting vacc_id please try again');
                                window.location.href='userRecords.php';
                                </script>");
                            }
                        }
                    }
                    else if(($dose1 == "" and $id1 == "" and $date1 == "") and ($dose2 != "" and $id2 != "" and $date2 != "")){
                        $q1 = "SELECT vacc_id from patient where id = '$_SESSION[user_id]'";
                        $vid1 = mysqli_query($con, $q1)or die($con->error);
                        $vacc_id =mysqli_fetch_row($vid1);
                        $last_id = $vacc_id[0];
                        
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
                                    window.alert('Error occured in 4 getting vacc_id please try again');
                                    window.location.href='userRecords.php';
                                    </script>");
                                }
                    }
                    else{
                        echo ("<script LANGUAGE='JavaScript'>
                        window.alert('Error occured 6 please try again');
                        window.location.href='userRecords.php';
                        </script>");
                    }
                }
                $con->close();
          
