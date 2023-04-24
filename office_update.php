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
  <h1>Update Office</h1>
  <section id = OSVUOverview>
    <form action = "office_update2.php" method = "POST">
      <label for = "OSVUOffice_ID">Select Office:</label>
      <select id = "OSVUOffice_ID" OSVUOffice_ID = "OSVUOffice_ID" name = "OSVUOffice_ID">
      <?php 
            include_once 'connectToTheDB.php';

            $sqlOff = "SELECT * FROM offices WHERE Flagged_Delete = 0;";
            $resultOff = mysqli_query($conn, $sqlOff);

            while($rOff = mysqli_fetch_array($resultOff)){

        ?>
        <option value = "<?php echo $rOff['OFFICE_ID'];?>"><?php echo $rOff['ADDRESS'];?></option>
        <?php
            }
        ?>
      </select>

      <label for = "OSVUBudget">New Budget:</label>
      <input type = "number" id = "OSVUBudget" OSVUBudget = "OSVUBudget" name = "OSVUBudget">

      <br></br>
      <button type = "submit" name = "submit">Update Office</button>
      <button type = "submit" name = "submit_c" formaction = "CEO.php">Return to CEO page</button>
    </form>
  </section>
</body>