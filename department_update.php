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

    button {
      width: 33%;
      margin: auto;
      background-color: dodgerblue;
      color: darkblue;
    }
  }
</style>

<body>
  <h1>Update Departments</h1>

  <section id = "DeptUpdateOverview">
    <form action = "department_update2.php" method = "POST">
      <label for = "DeptUeName">Department Name:</label>
      <select id = "DeptUName" DeptUpdateName = "DeptUName" name = "DeptUName">
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

      <label for = "DeptUSpecialist">New Specialist:</label>
      <select id = "DeptUSpecialist" DeptUSpecialist = "DeptUSpecialist" name = "DeptUSpecialist">
        <?php
             include_once 'connectToTheDB.php';

             $sqlS = "SELECT * FROM specialist WHERE Flagged_Delete = 0;";
             $resultS = mysqli_query($conn, $sqlS);
 
             while($rS = mysqli_fetch_array($resultS)){
        ?>
        <option value = "<?php echo $rS['Employee_ID'];?>"><?php echo $rS['Employee_Name'];?></option>
        <?php
             }
        ?>
      </select>

      <label for = "DeptUModified_By">Enter Your ID:</label>
      <input type = "text" id = "DeptUModified_By" DeptUModified_By = "DeptUModified_By" name = "DeptUModified_By">

      <br></br>
      <button type = "submit" name = "submit">Update Department</button>
      <button type = "submit_c" name = "submit_c" formaction = "CEO.php">Return to CEO page</button>
    </form>
  </section>
</body>