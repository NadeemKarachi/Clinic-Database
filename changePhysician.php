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

    section {
      display: none;
      border: 4px solid green;
      border-style: double;
      background-color: lightgoldenrodyellow;
      padding-bottom: 25px;
    }

    input[type=text]:focus {
      border: 3px solid #555;
    }
        
     input[type=number]:focus {
      border: 3px solid #555;
    }
  }
</style>

<body>
  <h1>Update Physicians</h1>

  <section id = "SUpdateOverview">
    <form action = "updatePhysician2.php" method = "POST">
      <label for = "SUpdateID">Select Employee to Change:</label>
      <select id = "SUpdateID" SUpdateID = "SUpdateID" name = "SUpdateID">
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

      <label for = "SUpdateName">Change Name:</label>
      <input type = "text" id = "SUpdateName" SUpdateName = "SUpdateName" name = "SUpdateName">

      <label for = "SUpdateOffice">Change Office:</label>
      <select id = "Spe_Off" Phy_Off = "Spe_Off" name = "Spe_Off">
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

      <label for = "SUpdateDept">Change Department:</label>
      <select id = "Spe_Dept" Phy_Dept = "Spe_Dept" name = "Spe_Dept">
        <?php 
            include_once 'connectToTheDB.php';

            $sqlDept = "SELECT * FROM departments WHERE Flagged_Delete = 0;";
            $resultDept = mysqli_query($conn, $sqlDept);

            while($rDept = mysqli_fetch_array($resultDept)){

        ?>
        <option value = "<?php echo $rDept['Department_Name'];?>"><?php echo $rDept['Department_Name'];?></option>
        <?php
            }
        ?>
      </select>

      <label for = "SUpdateSex">Change Sex:</label>
      <select id = "SUpdateSex" SUpdateSex = "SUpdateSex" name = "SUpdateSex">
        <option value = "M">Male</option>
        <option value = "F">Female</option>
        <option value = "O">Other</option>
      </select>

      <label for = "SUpdateEmail">Change Email:</label>
      <input type = "text" id = "SUpdateEmail" SUpdateEmail = "SUpdateEmail" name = "SUpdateEmail">

      <label for = "SUpdatePhone">Change Phone #:</label>
      <input type = "text" id = "SUpdatePhone" SUpdatePhone = "SUpdatePhone" name = "SUpdatePhone">

      <label for = "SUpdateAvailable">Change Availability:</label>
      <input type = "text" id = "SUpdateAvailable" SUpdateAvailable = "SUpdateAvailable" name = "SUpdateAvailable">

      <label for = "SUpdateSalary">Change Salary:</label>
      <input type = "number" id = "SUpdateSalary" SUpdateSalary = "SUpdateSalary" name = "SUpdateSalary">

      <label for = "SUpdateModifiedBy">Your Employee ID:</label>
      <input type = "text" id = "SUpdateModifiedBy" SUpdateModifiedBy = "SUpdateModifiedBy" name = "SUpdateModifiedBy">

      <br></br>
      <button type = "submit" name = "submit">Update Physician</button>
      <button type = "submit_c" name = "submit_c" formaction = "CEO.php">Return to CEO page</button>
    </form>
  </section>
</body>