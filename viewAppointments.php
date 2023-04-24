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

<form action = "patient.php">
    <button type = "submit" name = "submit" >Return to the main page</button>
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

        $Patient_ID_VA = $_GET['Patient_ID_VA'];
        $sql = "SELECT Patient_Name, Patient_ID, Physician_ID, Specialist_ID, Appointment_Time, Office_Address, Reason_For_Visit
                FROM appointments
                WHERE Patient_ID = '$Patient_ID_VA' AND appointments.Flagged_Delete = 0;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if($resultCheck > 0){

            while($row = mysqli_fetch_assoc($result)){
                echo "<tr><td>" . $row['Patient_Name'] . "</td><td>" . $row['Patient_ID'] . "</td><td>" . $row['Appointment_Time'] . "</td><td>" . $row['Office_Address'] . "</td><td>" . $row['Reason_For_Visit'] . "</td><td>";
            }
        }
        else{
            echo "Sorry, but it looks like you have no appointments";
        }
    ?>
</table>
