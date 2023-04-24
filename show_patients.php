
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
  <tr>
      <th>Patient ID</th>
      <th>Patient Name</th>
      <th>Diagnosis Test</th>
      <th>Diagnosis Result</th>
      <th>Last Update Date</th>
    </tr>
  <?php
    include_once 'connectToTheDB.php';

    $PVinput = $_GET['PVinput'];
      $sql2 = "SELECT Patient_ID, Patient_Name, Diagnosis_Test, Diagnosis_Results, Last_Modified_Date
               FROM medical_history AS MH
               WHERE Patient_ID = '$PVinput' AND MH.Flagged_Delete = 0;";
    $result2 = mysqli_query($conn, $sql2);
    $resultCheck2 = mysqli_num_rows($result2);

    if($resultCheck2 > 0) {
      while($row2 = mysqli_fetch_assoc($result2)) {
        echo "<tr><td>" . $row2["Patient_ID"] . "</td><td>" . $row2["Patient_Name"] . "</td><td>" . $row2["Diagnosis_Test"] . "</td><td>"  . $row2["Diagnosis_Results"] . "</td><td>" . $row2["Last_Modified_Date"] . "</td></tr>";
      }
    } else {
      echo "No Patients found";
    }
  ?>
</table>
<br></br>
<form action = "Doc.php">
<button type = "submit" name = "submit" >Return to the main page</button>
</form>