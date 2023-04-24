<form action = "patient.php">
    <p>Here is your medical history:</p>
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
    <table>
        <th>Diagnosis Test</th>
        <th>Diagnosis Result</th>
        <th>Associated Physician</th>
        <th>Associated Specialist</th>
        <th>Appointment Date and Time</th>

        <?php 
            include_once 'connectToTheDB.php';

            $Patient_ID_VMH = $_GET['Patient_ID_VMH'];
            $sql = "SELECT medical_history.Diagnosis_Test, medical_history.Diagnosis_Results, 
                           medical_history.Asso_Physician, medical_history.Asso_Specialist, 
                           medical_history.Appointment_Time
                    FROM medical_history, patients
                    WHERE medical_history.Patient_ID = '$Patient_ID_VMH' AND patients.Patient_ID = '$Patient_ID_VMH' AND medical_history.Flagged_Delete = 0;";
            $result = mysqli_query ($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            if ($resultCheck > 0){
                while($row = mysqli_fetch_assoc($result)){
                    echo "<tr><td>" . $row['Diagnosis_Test'] . "</td><td>" . $row['Diagnosis_Results'] . "</td><td>" . 
                    $row['Asso_Physician'] . "</td><td>" . $row['Asso_Specialist'] . "</td><td>" . $row['Appointment_Time'] . "</td><td>";
                }
            }
            else {
                echo "Sorry, but it looks like you have no history with us";
            }
            
        ?>
    </table>
    <br></br>
    <button type = "submit" name = "submit" >Return to the main page</button>
</form>