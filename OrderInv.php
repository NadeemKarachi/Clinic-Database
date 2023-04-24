<p>Here is your Inventory</p>
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

<form action = "OrderInvSucc.php" method = "POST">
    <label for = "Inv_name">Please input the Item to order:</label>
      <select id = "Inv_name" Inv_name = "Inv_name" name = "Inv_name">
      <?php 
            include_once 'connectToTheDB.php';

            $sqlI = "SELECT * FROM inventory WHERE Flagged_Delete = 0;";
            $resultI =  mysqli_query($conn, $sqlI);

            while($rI = mysqli_fetch_array($resultI)){
          ?>
              <option value = "<?php echo $rI['Inventory_ID']; ?>"><?php echo $rI['Inventory_Name']; ?></option>
          <?php
            }
          ?>
      </select>
    <br></br>
    <label for = "Inv_Count">Please input the amount you would like to add/remove:</label>
    <input type = "number" id = "Inv_Count" Inv_Count = "Inv_Count" name = "Inv_Count" placeholder = "use '-' infront to remove">

    <br></br>
    <button type = "submit" name = "submit">Update</button>
    <button type = "submit" name = "submit_s" formaction="Doc.php">Return to main page</button>

</form>

<table style = "float:left">
  <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Office </th>
      <th>Amount</th>
    </tr>
  <?php
    include_once 'connectToTheDB.php';

    $sql4 = "SELECT Inventory_ID, Inventory_Name, Asso_Office, Inventory_Count
             FROM inventory
             WHERE inventory.Flagged_Delete = 0;";
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
