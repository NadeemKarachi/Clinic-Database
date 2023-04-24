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
  <h1>Update Medical History</h1>
  <form action = "changeMHDetail.php" method = "POST">
    <label for = "pat">Select a patients whose history you would like to update:</label>
    <select id = "pat" pat = "pat" name = "pat">
        <?php 
          include_once 'connectToTheDB.php';

          $sqlPYes = "SELECT * FROM patients WHERE Flagged_Delete = 0;";
          $resultPYes =  mysqli_query($conn, $sqlPYes);

          while($rPYes = mysqli_fetch_array($resultPYes)){
        ?>
            <option value = "<?php echo $rPYes['Patient_ID']; ?>"><?php echo $rPYes['Name'] . "(" . $rPYes['Patient_ID'] . ")"; ?></option>
        <?php
          }
        ?>
    </select>
    <br></br>
    <button type = "submit" name = "submit" >View the patient's Medical History</button>
    <button type = "submit" name = "submit_s" formaction="Doc.php">Return to the main page</button>
  </form>
</body>