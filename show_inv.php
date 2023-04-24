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
      <th>ID</th>
      <th>Name</th>
      <th>Office </th>
      <th>Amount</th>
    </tr>
  <?php
    include_once 'connectToTheDB.php';

    $IVinput = $_GET['IVinput'];
    $sql4 = "SELECT Inventory_ID, Inventory_Name, Asso_Office, Inventory_Count
             FROM inventory
             WHERE Inventory_Name = '$IVinput' AND inventory.Flagged_Delete = 0;";
  $result4 = mysqli_query($conn, $sql4);
  $resultCheck4 = mysqli_num_rows($result4);

  if($resultCheck4 > 0) {
    while($row4 = mysqli_fetch_assoc($result4)) {
      echo "<tr><td>" . $row4["Inventory_ID"] . "</td><td>" . $row4["Inventory_Name"] . "</td><td>" . $row4["Asso_Office"] . "</td><td>" . $row4["Inventory_Count"] . "</td></tr>";
    }
    } else {
      echo "No inventory found";
      }
  ?>
</table>
<br></br>
<button type = "submit" name = "submit" >Return to the main page</button>
</form>