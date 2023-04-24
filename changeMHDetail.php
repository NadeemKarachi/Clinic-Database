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
<form action = "changeMHDetailSucc.php" method = "POST">
    <label for = "MHID">Input the medical history ID you would like to change:</label>
    <input type = "text" id = "MHID" MHID = "MHID" name = "MHID" maxlength = "45">

    <br></br>

    <label for = "DT">Please update the diagnosis test:</label>
    <input type = "text" id = "DT" DT = "DT" name = "DT" maxlength= "1000">

    <br></br>

    <button type = "submit" name = "submit" >Update the patient's Medical History</button>
    <button type = "submit" name = "submit_s" formaction="Doc.php">Return to the main page</button>
</form>

<p>This is the patient's current medical history:</p>
<table style = "float:left">
    <tr>
      <th>Patient ID</th>
      <th>Patient Name</th>
      <th>Diagnosis Test</th>
      <th>Diagnosis Result</th>
      <th>Date of the Appointment</th>
      <th>Medical History ID</th>
    </tr>

    <?php
        include_once 'connectToTheDB.php';

        $pat = $_POST['pat'];

        $sql = "SELECT m.Patient_ID, m.Patient_Name, m.Diagnosis_Test, m.Diagnosis_Results, m.Appointment_Time, m.Medical_History_ID
                FROM medical_history as m
                WHERE m.Patient_ID = '$pat' AND m.Flagged_Delete = 0;";

        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if($resultCheck > 0){
            while($r = mysqli_fetch_assoc($result)){
                echo "<tr><td>" . $r['Patient_ID'] . "</td><td>" . $r['Patient_Name'] . "</td><td>" . $r['Diagnosis_Test'] . "</td><td>" . $r['Diagnosis_Results'] . "</td><td>" . $r['Appointment_Time'] . "</td><td>" . $r['Medical_History_ID'] . "</td></tr>";
            }
        }
        else{
            echo "Sorry this patient has no medical history";
        }
    ?>
</table>