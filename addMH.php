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
  <h1>Add Medical History</h1>
  <p>**Please Note that to add medical history for a patient, said patient must have an appointment in the table below**</p>
  <form action = "addMHSucc.php" method = "POST">
    <label for = "Pat_ID">Patient ID:</label>
    <input type = "text" id = "Pat_ID" Pat_ID = "Pat_ID" name = "Pat_ID" maxlength = "7">

    <label for = "Pat_Name">Patient Name:</label>
    <input type = "text" id = "Pat_Name" Pat_Name = "Pat_Name" name = "Pat_Name" maxlength = "30">

    <label for = "Pat_Age">Patient Age:</label>
    <input type = "number" id = "Pat_Age" Pat_Age = "Pat_Age" name = "Pat_Age">

    <label for = "Pat_Sex">Patient Sex:</label>
      <select id = "Pat_Sex" Pat_Sex = "Pat_Sex" name = "Pat_Sex">
        <option value = "M">Male</option>
        <option value = "F">Female</option>
        <option value = "O">Other</option>
      </select>
    <br></br>

    <label for = "Pat_Test">Diagnostic Test:</label>
    <input type = "text" id = "Pat_Test" Pat_Test = "Pat_Test" name = "Pat_Test" maxlength = "1000">

    <label for = "Pat_Result">Diagnostic Result:</label>
    <input type = "text" id = "Pat_Result" Pat_Result = "Pat_Result" name = "Pat_Result" maxlength = "1000">

    <br></br>
    <label for = "Asso_Phy">Associated Physician:</label>
    <select id = "Asso_Phy" Asso_Phy = "Asso_Phy" name = "Asso_Phy">
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

    <label for = "Asso_Spec">Associated Specialist(if applicable):</label>
    <select id = "Asso_Spec" Asso_Spec = "Asso_Spec" name = "Asso_Spec">
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

    <label for = "Apt_Date">Appointment Date:</label>
    <input type = "datetime-local" id = "Apt_Date" Apt_Date = "Apt_Date" name = "Apt_Date">

    <br></br>
    <label for = "Med_ID">Please input the medical history ID:</label>
    <input type = "text" id = "Med_ID" Med_ID = "Med_ID" name = "Med_ID" maxlength = "45">

    <label for = "Emp_ID">Please input your ID:</label>
    <input type = "text" id = "Emp_ID" Emp_ID = "Emp_ID" name = "Emp_ID" maxlength = "7" placeholder = "physician or specialist ID only">
    
    <label for = "Pat_TD">Today's Date:</label>
    <input type = "date" id = "Pat_TD" Pat_TD = "Pat_TD" name = "Pat_TD">
    <br></br>

    <button type = "submit" name = "submit" >Finish Adding Medical History</button>
    <button type = "submit" name = "submit_s" formaction="Doc.php">Return to Patient History page</button>
  </form>

  <style>
    body {
      background-color: lightgray;
    }
    
    table, th, td {
    border: 2px solid rgb(2, 2, 2);
    table-layout: fixed;
    margin-left: auto;
    margin-right: auto;
    width: 75%;
    text-align: center;
    }
</style>
<p>This is the list of appointments:</p>
  <table style = "float:left">
    <tr>
        <th>Patient Name</th>
        <th>Patient's ID</th>
        <th>Appointment Date & Time</th>
    </tr>
    <?php
        include_once 'connectToTheDB.php';

        $sql = "SELECT Patient_Name, Patient_ID, Appointment_Time FROM appointments WHERE Flagged_Delete = 0;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if($resultCheck > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr><td>" . $row['Patient_Name'] . "</td><td>" . $row['Patient_ID'] . "</td><td>" . $row['Appointment_Time'] . "</td></tr>";
            }
        }
        else{
            echo "Sorry it looks like there are no appointments";
        }
    ?>
  </table>
</body>