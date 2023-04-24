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
    <h1>Remove a Department</h1>
    <form action = "department_delete_succ.php" method = "POST">
        <label for = "dept_ID">Select a Department to Remove:</label>
            <select id = "dept_ID" dept_ID = "dept_ID" name = "dept_ID">
                <?php
                    include_once 'connectToTheDB.php';

                    $sqld = "SELECT * FROM departments WHERE Flagged_Delete = 0;";
                    $resultd = mysqli_query($conn, $sqld);

                    while($rd = mysqli_fetch_array($resultd)){
                ?>
                <option value = "<?php echo $rd['Department_Name'];?>"><?php echo $rd['Department_Name'];?></option>
                <?php
                    }
                ?>
            </select>
        <br></br>
        <button type = "submit" name = "submit">Remove this Department</button>
        <button type = "submit" name = "submit_p" formaction = "CEO.php">Return to the main page</button>
    </form>
</body>