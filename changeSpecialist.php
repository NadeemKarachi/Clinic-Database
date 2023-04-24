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
  <h1>Update Specialists</h1>
  <section id = "SUpdateOverview">
    <form action = "updateSpecialist2.php" method = "POST">
      <label for = "SUpdateID">Select Specialist to Change:</label>
      <select id = "SUpdateID" SUpdateID = "SUpdateID" name = "SUpdateID">
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
     </select><br></br>

      <label for = "SUpdateDept">Change Department:</label>
      <select id = "Spe_Dept" Spe_Dept = "Spe_Dept" name = "Spe_Dept">
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

      <label for = "SUpdateAvailable">Change Availability:</label>
      <input type = "text" id = "SUpdateAvailable" SUpdateAvailable = "SUpdateAvailable" name = "SUpdateAvailable">

      <label for = "SUpdatePractice">Change Practice:</label>
      <input type = "text" id = "SUpdatePractice" SUpdatePractice = "SUpdatePractice" name = "SUpdatePractice"><br></br>
      
      <label for = "SUpdateEmail">Change Email:</label>
      <input type = "text" id = "SUpdateEmail" SUpdateEmail = "SUpdateEmail" name = "SUpdateEmail">

      <label for = "SUpdatePhone">Change Phone #:</label>
      <input type = "text" id = "SUpdatePhone" SUpdatePhone = "SUpdatePhone" name = "SUpdatePhone">

      <label for = "SUpdateYearsInDept">Change Years In Department:</label>
      <input type = "number" id = "SUpdateYearsInDept" SUpdateYearsInDept = "SUpdateYearsInDept" name = "SUpdateYearsInDept">

      <label for = "SUpdateYearsHD">Change Years As Head of Department:</label>
      <input type = "number" id = "SUpdateYearsHD" SUpdateYearsHD = "SUpdateYearsHD" name = "SUpdateYearsHD"><br></br>

      <label for = "SUpdateSupervisor">Change Supervisor:</label>
      <select id = "SUpdateSupervisor" SUpdateSupervisor = "SUpdateSupervisor" name = "SUpdateSupervisor">
        <option value = "">None Selected</option>
        <?php 
          include_once 'connectToTheDB.php';

          $sqlSup = "SELECT * FROM specialist WHERE Flagged_Delete = 0 AND Supervisor_ID IS NULL;";
          $resultSup = mysqli_query($conn, $sqlSup);

          while($rSup = mysqli_fetch_array($resultSup)){
        ?>  
          <option value = "<?php echo $rSup['Employee_ID']; ?>"><?php echo $rSup['Employee_Name']; ?></option>
              
        <?php
        }
        ?>
      </select>

      <label for = "SUpdateModifiedBy">Your Employee ID:</label>
      <input type = "text" id = "SUpdateModifiedBy" SUpdateModifiedBy = "SUpdateModifiedBy" name = "SUpdateModifiedBy">

      <br></br>
      <button type = "submit" name = "submit">Update Specialist</button>
      <button type = "submit_c" name = "submit_c" formaction = "CEO.php">Return to CEO page</button>
    </form>
  </section>
</body>