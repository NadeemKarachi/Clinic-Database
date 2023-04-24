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
<table>
  <tr>
    <th>Employee Name</th>
    <th>Employee ID</th>
    <th>Office ID</th>
    <th>Office Address</th>
    <th>Salary</th>
  </tr>
  <?php
    include_once 'connectToTheDB.php';

    $DSVinput = $_GET['DSVinput'];
    $DSVinput2 = $_GET['DSVinput2'];
    $sql2 = "SELECT *
            FROM physician_info_per_office
            WHERE Salary >= '$DSVinput' AND OFFICE_ID = '$DSVinput2';";
    $result2 = mysqli_query($conn, $sql2);
    $resultCheck2 = mysqli_num_rows($result2);

    //If error, add $ infront of DSVinput and DSVinput2 in the WHERE clause of sql2. Other issues might arrise from AND and ';"

    if($resultCheck2 > 0) {
      while($row2 = mysqli_fetch_assoc($result2)) {
        echo "<tr><td>" . $row2["Employee_Name"] . "</td><td>" . $row2["Employee_ID"] . "</td><td>" . $row2["OFFICE_ID"] . "</td><td>" . $row2["ADDRESS"] . "</td><td>" . $row2["Salary"] . "</td></tr>";
      }
    } else {
      echo "No doctors found";
    }
  ?>
</table>
<br></br>
<button type = "submit" name = "submit" >Return to the main page</button>
</form>