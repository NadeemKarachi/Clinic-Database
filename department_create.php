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
  <h1>Create New Department</h1>

  <section id = "DeptCOverview">
    <form action = "department_create2.php" method = "POST">
      <label for = "DeptCName">Dept Name:</label>
      <input type = "text" id = "DeptCName" DeptCName = "DeptCName" name = "DeptCName">

      <label for = "DeptCOffice">Associated Office:</label>
      <select id = "DeptCOffice" DeptCOffice = "DeptCOffice" name = "DeptCOffice">
        <?php
            include_once 'connectToTheDB.php';

            $sqlO = "SELECT * FROM offices WHERE Flagged_Delete = 0;";
            $resultO = mysqli_query($conn, $sqlO);
    
            while($rO = mysqli_fetch_array($resultO)){
          ?>
              <option value= "<?php echo $rO['OFFICE_ID']?>"><?php echo $rO['ADDRESS']?></option>
          <?php
            }
          ?>
      </select>

      <label for = "DeptCSpecialist">Head Specialist:</label>
      <select id = "DeptCSpecialist" DeptCSpecialist = "DeptCSpecialist" name = "DeptCSpecialist">
      <?php 
          include_once 'connectToTheDB.php';

          $sqlS = "SELECT * FROM specialist WHERE Flagged_Delete = 0;";
          $resultS = mysqli_query($conn, $sqlS);

          while($rS = mysqli_fetch_array($resultS)){
        ?>  
            <option value = "<?php echo $rS['Employee_ID']; ?>"><?php echo $rS['Employee_Name']; ?></option>
        
          <?php
          }
          ?>
      </select>

      <label for = "DeptCModifiedBy">Enter Your ID:</label>
      <input type = "text" id = "DeptCModifiedBy" DeptCModifiedBy = "DeptCModifiedBy" name = "DeptCModifiedBy" placeholder = "BM100">

      <br></br>
      <button type = "submit" name = "submit">Add Department</button>
      <button type = "submit" name = "submit_c" formaction = "CEO.php">Return to CEO page</button>
    </form>
  </section>
</body>