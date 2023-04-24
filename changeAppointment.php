<p>Here are your appointments</p>
<style>
table, th, td {
border: 2px solid rgb(2, 2, 2);
table-layout: fixed;
margin-left: auto;
margin-right: auto;
width: 75%;
text-align: center;
}
</style>

<form action = "changeAppointmentSucc.php" method = "POST">
    <label for = "Patient_ID">Please input your ID:</label>
    <input type = "text" id = "Patient_ID" Patient_ID = "Patient_ID" name = "Patient_ID" maxlength="7">
    <br></br>
    <label for = "Appointment_Time">Please select the appointment date and time you would like to change:</label>
    <input type = "datetime-local" id = "Appointment_Time" Appointment_Time = "Appointment_Time" name = "Appointment_Time">
    <br></br>
    <label for = "Appointment_Time_N">Please select the new appointment date and time:</label>
    <input type = "datetime-local" id = "Appointment_Time_N" Appointment_Time_N = "Appointment_Time_N" name = "Appointment_Time_N">
    <br></br>
    
    <button type = "submit" name = "submit">Change your Appointment</button>

    <button type = "submit" name = "submit_p" formaction = "patient.php">Return to the main page</button>
</form>

<table style = "float:left">
    <tr>
    <th>Patient Name</th>
    <th>Patient ID</th>
    <th>Appointment Time</th>
    <th>Office Address</th>
    <th>Reason For Visit</th>
    </tr>

    <?php
        include_once 'connectToTheDB.php';

        $Patient_ID_RA = $_GET['Patient_ID_RA'];
        $sql = "SELECT Patient_Name, Patient_ID, Physician_ID, Specialist_ID, Appointment_Time, Office_Address, Reason_For_Visit
                FROM appointments
                WHERE Patient_ID = '$Patient_ID_RA' AND appointments.Flagged_Delete = 0;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if($resultCheck > 0){

            while($row = mysqli_fetch_assoc($result)){
                echo "<tr><td>" . $row['Patient_Name'] . "</td><td>" . $row['Patient_ID'] . "</td><td>" . $row['Appointment_Time'] . "</td><td>" . $row['Office_Address'] . "</td><td>" . $row['Reason_For_Visit'] . "</td></tr>";
            }
        }
        else{
            echo "Sorry, but it looks like you have no appointments";
        }
    ?>
</table>
