<form action = "Doc.php">
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
    <th>Date</th>
    <th>Patient Name</th>
    <th>Office Location</th>
  </tr>
  <?php
    include_once 'connectToTheDB.php';

    $SVinput = $_GET['SVinput'];
    $SV_DT = $_GET['SV_DT'];

      $sql = "SELECT Appointment_Time, appointments.Patient_Name, appointments.Office_Address
              FROM offices, appointments
              WHERE appointments.Specialist_ID = '$SVinput' AND appointments.Appointment_Time >= '$SV_DT' AND 
                    appointments.Office_Address = offices.ADDRESS AND appointments.Flagged_Delete = 0 AND offices.Flagged_Delete = 0
              ORDER BY Appointment_Time;";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);

     if($resultCheck > 0) {
      while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row["Appointment_Time"] . "</td><td>" . $row["Patient_Name"] . "</td><td>" . $row["Office_Address"] . "</td></tr>";
      }
      } else {
        echo "No Schedule found";
      }
  ?>
</table>
<br></br>
<button type = "submit" name = "submit" >Return to the main page</button>
</form>