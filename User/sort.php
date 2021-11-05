<?php
        require 'includes/common.php';
        $servern = "localhost";
        $usern = "root";
        $passw = "";
        $dbn = "vaccinations";
        $con=new mysqli($servern,$usern,$passw,$dbn);
        $search_value=filter_input(INPUT_GET, 'search');
        if($con->connect_error){
        echo 'Connection Faild: '.$con->connect_error;
         }

            $sql = "SELECT hospital.h_id,hospital.h_name,hospital.pin,hospital.address,hospital_vacc.time_slots,hospital_vacc.capacity,vaccines.type FROM hospital JOIN hospital_vacc ON hospital.h_id=hospital_vacc.h_id JOIN vaccines ON vaccines.vac_id=hospital_vacc.vac_id";
            if (filter_input(INPUT_GET, 'sort') == 'id')
            {
                $sql1 = "SELECT hospital.h_id,hospital.h_name,hospital.pin,hospital.address,hospital_vacc.time_slots,hospital_vacc.capacity,vaccines.type FROM hospital JOIN hospital_vacc ON hospital.h_id=hospital_vacc.h_id JOIN vaccines ON vaccines.vac_id=hospital_vacc.vac_id ORDER BY hospital.h_id";
                $res = $con->query($sql);
                while($row = $res->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['h_id'] . "</td>";
                echo "<td>" . $row['h_name'] . "</td>";
                echo "<td>" . $row['pin'] . "</td>";
                echo "<td>" . $row['address'] . "</td>";
                echo "<td>" . $row['time_slots'] . "</td>";
                echo "<td>" . $row['capacity'] . "</td>";
                echo "<td>" . $row['type'] . "</td>";
                echo "</tr>";
            }
            }
            elseif (filter_input(INPUT_GET, 'sort') == 'address')
            {
                $sql .= " ORDER BY hospital.address";
                header('location: bookSlot.php');
            }
            elseif (filter_input(INPUT_GET, 'sort') == 'hospital')
            {
                $sql .= " ORDER BY hospital.h_name";
            }
            elseif(filter_input(INPUT_GET, 'sort') == 'pincode')
            {
                $sql .= " ORDER BY hospital.pin";
            }
            elseif(filter_input(INPUT_GET, 'sort') == 'capacity')
            {
                $sql .= " ORDER BY hospital_vacc.capacity";
            }
?>

