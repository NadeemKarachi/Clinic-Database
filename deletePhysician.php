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
    <h1>Remove a Physician</h1>
    <form action = "deletePhysiciansucc.php" method = "POST">
        <label for = "Phy_ID">Select a Physician to remove:</label>
        <select id = "Phy_ID" Phy_ID = "Phy_ID" name = "Phy_ID">
        <?php 
            include_once 'connectToTheDB.php';

            $sqlPYes = "SELECT * FROM physician WHERE Flagged_Delete = 0;";
            $resultPYes =  mysqli_query($conn, $sqlPYes);

            while($rPYes = mysqli_fetch_array($resultPYes)){
        ?>
          <option value = "<?php echo $rPYes['Employee_ID']; ?>"><?php echo $rPYes['Employee_Name']; ?></option>
        <?php
            }
        ?>
        </select>
        <br></br>
        <button type = "submit" name = "submit">Remove this Physician</button>
        <button type = "submit" name = "submit_p" formaction = "CEO.php">Return to the main page</button>
    </form>
</body>