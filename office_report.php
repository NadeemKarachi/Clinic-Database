<form action = "CEO.php">
<style>
    body {
      background-color: lightgray;
    }
    
    table, th, td {
    border: 2px solid rgb(2, 2, 2);
    table-layout: fixed;
    margin-left: auto;
    margin-right: auto;
    width: 75%;
    text-align: center;
    }
</style>
<table>Office Report:
  <tr>
    <th>Office ID</th>
    <th>Address</th>
    <th>Number of Departments</th>
    <th>Number of Specialists</th>
  </tr>
  <?php
    include_once 'connectToTheDB.php';

    $OSVinput = $_GET['OSVinput'];
    $OSVinput2 = $_GET['OSVinput2'];
    $sql = "SELECT * 
            FROM office_info
            WHERE Number_Of_Departments >= '$OSVinput' AND Number_Of_Specialist >= '$OSVinput2';";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    //If error, add $ infront of OSVinput and OSVinput2 in the WHERE clause of sql2. Other issues might arrise from AND and ';"

    if($resultCheck > 0) {
      while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row["OFFICE_ID"] . "</td><td>" . $row["ADDRESS"] . "</td><td>" . $row["Number_Of_Departments"] . "</td><td>" . $row["Number_Of_Specialist"] . "</td></tr>";
      }
    } else {
      echo "No office found";
    }
  ?>
</table>

<br></br>

<table>Available Departments:
  <tr>
    <th>Department Name</th>
    <th>Head Specialist</th>
    <th>Associated Office</th>
    <th>Date Created</th>
  </tr>
  <?php 
    include_once 'connectToTheDB.php';

    $sqlD = "SELECT d.Department_Name as dname, d.Head_Specialist as hs, d.Asso_Office as ao, d.Date_Created as dc
             FROM departments as d, offices as o
             WHERE d.Asso_Office = o.OFFICE_ID AND d.Flagged_Delete = 0 AND o.Flagged_Delete = 0
             ORDER BY d.Asso_Office;";

    $resultD = mysqli_query($conn, $sqlD);
    $resultDCheck = mysqli_num_rows($resultD);

    if($resultDCheck > 0){
      while($rD = mysqli_fetch_assoc($resultD)){
        echo "<tr><td>" . $rD['dname'] . "</td><td>" . $rD['hs'] . "</td><td>" . $rD['ao'] . "</td><td>" . $rD['dc'] . "</td></tr>";
      }
    }
    else{
      echo "No Departments";
    }

  ?>
</table>

<br></br>

<table>List of All Specialists:
  <tr>
    <th>Specialist Name</th>
    <th>Specialist ID</th>
    <th>Specialist Practice</th>
    <th>Specialist's Associated Office</th>
    <th>Date of Employment</th>
  </tr>
  <?php
    include_once 'connectToTheDB.php';

    $sqlS = "SELECT s.Employee_Name as sname, s.Employee_ID as spID, s.Specialist_Practice as sprac, s.Asso_Office as soff, s.Date_First_Employed as sdfe
             FROM specialist as s, offices as o
             WHERE o.OFFICE_ID = s.Asso_Office AND s.Flagged_Delete = 0 AND o.Flagged_Delete = 0
             ORDER BY s.Asso_Office;";

    $resultS = mysqli_query($conn, $sqlS);
    $resultSCheck = mysqli_num_rows($resultS);

    if($resultSCheck > 0){
      while($rS = mysqli_fetch_assoc($resultS)){
        echo "<tr><td>" . $rS['sname'] . "</td><td>" . $rS['spID'] . "</td><td>" . $rS['sprac'] . "</td><td>" . $rS['soff'] . "</td><td>" . $rS['sdfe'] . "</td></tr>";
      }
    }
    else{
      echo "No Specialist Table Available";
    }
  ?>
</table>
<button type = "submit" name = "submit" >Return to the main page</button>
</form>