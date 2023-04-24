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
    <h1>Remove an Office</h1>
    <form action = "office_delete_succ.php" method = "POST">
        <label for = "off_ID">Select an Office to remove:</label>
        <select id = "off_ID" off_ID = "off_ID" name = "off_ID">
        <?php 
            include_once 'connectToTheDB.php';

            $sqlO = "SELECT * FROM offices WHERE Flagged_Delete = 0;";
            $resultO =  mysqli_query($conn, $sqlO);

            while($rO = mysqli_fetch_array($resultO)){
        ?>
          <option value = "<?php echo $rO['OFFICE_ID']; ?>"><?php echo $rO['ADDRESS']; ?></option>
        <?php
            }
        ?>
        </select>
        <br></br>
        <button type = "submit" name = "submit">Remove this Office</button>
        <button type = "submit" name = "submit_p" formaction = "CEO.php">Return to the main page</button>
    </form>
</body>