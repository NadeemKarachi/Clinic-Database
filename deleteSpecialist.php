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
    <h1>Remove a Specialist</h1>
    <form action = "deleteSpecialistsucc.php" method = "POST">
        <label for = "Spec_ID">Select a Specialist to remove:</label>
        <select id = "Spec_ID" Spec_ID = "Spec_ID" name = "Spec_ID">
        <?php 
            include_once 'connectToTheDB.php';

            $sql = "SELECT * FROM specialist WHERE Flagged_Delete = 0;";
            $result =  mysqli_query($conn, $sql);

            while($r = mysqli_fetch_array($result)){
        ?>
          <option value = "<?php echo $r['Employee_ID']; ?>"><?php echo $r['Employee_Name']; ?></option>
        <?php
            }
        ?>
        </select>
        <br></br>
        <button type = "submit" name = "submit">Remove this Specialist</button>
        <button type = "submit" name = "submit_p" formaction = "CEO.php">Return to the main page</button>
    </form>
</body>