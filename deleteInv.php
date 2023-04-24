<style>
    body {
      background-color: lightgray;
    }

    h1 {
      font-family: "Times New Roman";
      text-align: center;
      background-color: mediumseagreen;
      border: 4px solid green;
      border-style: double;
  }
</style>

<body>
    <h1>Remove an Item</h1>
    <form action = "deleteInvSucc.php" method = "POST">
         <label for = "Inv_name">Please select the name of Item:</label>
      <select id = "Inv_name" IVinput = "Inv_name" name = "Inv_name">
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
        <button type = "submit" name = "submit">Remove this Item</button>
        <button type = "submit" name = "submit_p" formaction = "Doc.php">Return to the main page</button>
    </form>
</body>