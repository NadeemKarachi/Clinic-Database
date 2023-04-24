<style>
  body {
    background-color: lightgray;
  }

  button {
    width: 33%;
    margin: auto;
    background-color: dodgerblue;
    color: darkblue;
  }
</style>
<body>
<?php
  include_once 'connectToTheDB.php';

  $SUpdateID = $_POST['SUpdateID'];

  if(!empty($_POST['SUpdateName'])){
    $SUpdateName = $_POST['SUpdateName'];
  }
  else{
    $sqlN = "SELECT Employee_Name FROM specialist WHERE Employee_ID = '$SUpdateID';";
    $resultN = mysqli_query($conn, $sqlN);
    $rowN = mysqli_fetch_assoc($resultN);
    $SUpdateName = $rowN['Employee_Name'];
  }
  
  $SUpdateOffice = $_POST['Spe_Off'];
  $SUpdateDepartment = $_POST['Spe_Dept'];
  $SUpdateSex = $_POST['SUpdateSex'];

  if(!empty($_POST['SUpdateAvailable'])){
    $SUpdateAvailable = $_POST['SUpdateAvailable'];
  }
  else{
    $sqlA = "SELECT Available FROM specialist WHERE Employee_ID = '$SUpdateID';";
    $resultA = mysqli_query($conn, $sqlA);
    $rowA = mysqli_fetch_assoc($resultA);
    $SUpdateAvailable = $rowA['Available'];
  }

  if(!empty($_POST['SUpdateEmail'])){
    $SUpdateEmail = $_POST['SUpdateEmail'];
  }
  else{
    $sqlE = "SELECT Employee_Email FROM specialist WHERE Employee_ID = '$SUpdateID';";
    $resultE = mysqli_query($conn, $sqlE);
    $rowE = mysqli_fetch_assoc($resultE);
    $SUpdateEmail = $rowE['Employee_Email'];
  }
  
  if(!empty($_POST['SUpdatePhone'])){
    $SUpdatePhone = $_POST['SUpdatePhone'];
  }
  else{
    $sqlP = "SELECT Employee_Phone FROM specialist WHERE Employee_ID = '$SUpdateID';";
    $resultP = mysqli_query($conn, $sqlP);
    $rowP = mysqli_fetch_assoc($resultP);
    $SUpdatePhone = $rowP['Employee_Phone'];
  }
 
  if(!empty($_POST['SUpdateYearsInDept'])){
    $SUpdateYearsInDept = $_POST['SUpdateYearsInDept'];
  }
  else{
    $sqlYID = "SELECT Years_In_Department FROM specialist WHERE Employee_ID = '$SUpdateID';";
    $resultYID = mysqli_query($conn, $sqlYID);
    $rowYID = mysqli_fetch_assoc($resultYID);
    $SUpdateYearsInDept = $rowYID['Years_In_Department'];
  }
  
  if(!empty($_POST['SUpdateYearsHD'])){
    $SUpdateYearsHD = $_POST['SUpdateYearsHD'];
  }
  else{
    $sqlYHD = "SELECT Years_as_head_of_Department FROM specialist WHERE Employee_ID = '$SUpdateID';";
    $resultYHD = mysqli_query($conn, $sqlYHD);
    $rowYHD = mysqli_fetch_assoc($resultYHD);
    $SUpdateYearsHD = $rowYHD['Years_as_head_of_Department'];
  }

  $SUpdateSupervisor = $_POST['SUpdateSupervisor'];
 
  if(!empty($_POST['SUpdatePractice'])){
    $SUpdatePractice = $_POST['SUpdatePractice'];
  }
  else{
    $sqlpra = "SELECT Specialist_Practice FROM specialist WHERE Employee_ID = '$SUpdateID';";
    $resultpra = mysqli_query($conn, $sqlpra);
    $rowpra = mysqli_fetch_assoc($resultpra);
    $SUpdatePractice = $rowpra['Specialist_Practice'];
  }

  $SUpdateLast_Modified = date('Y-m-d');
  $SUpdateModifiedBy = $_POST['SUpdateModifiedBy'];

  if($_POST['SUpdateSupervisor'] != ""){
    $sql = "UPDATE specialist
            SET Employee_Name = '$SUpdateName', Asso_Office = '$SUpdateOffice', Asso_Department = '$SUpdateDepartment', 
                Sex = '$SUpdateSex', Available = '$SUpdateAvailable', Specialist_Practice = '$SUpdatePractice', 
                Employee_Email = '$SUpdateEmail', Employee_Phone = '$SUpdatePhone', Years_In_Department = $SUpdateYearsInDept, 
                Years_as_head_of_Department = $SUpdateYearsHD, Supervisor_ID = '$SUpdateSupervisor', 
                Last_Date_Modified = '$SUpdateLast_Modified', Last_Modified_By = '$SUpdateModifiedBy'
            WHERE Employee_ID = '$SUpdateID';";
  }
  elseif ($_POST['SUpdateSupervisor'] == ""){
    $sql = "UPDATE specialist
            SET Employee_Name = '$SUpdateName', Asso_Office = '$SUpdateOffice', Asso_Department = '$SUpdateDepartment', 
                Sex = '$SUpdateSex', Available = '$SUpdateAvailable', Specialist_Practice = '$SUpdatePractice', 
                Employee_Email = '$SUpdateEmail', Employee_Phone = '$SUpdatePhone', Years_In_Department = $SUpdateYearsInDept, 
                Years_as_head_of_Department = $SUpdateYearsHD, 
                Last_Date_Modified = '$SUpdateLast_Modified', Last_Modified_By = '$SUpdateModifiedBy'
            WHERE Employee_ID = '$SUpdateID';";
  }
  $result = mysqli_query($conn, $sql);

  if($result) {
    echo 'Specialist Updated';
  } else {
    echo 'Specialist Update Failed';
  }
?>
<form action = "CEO.php">
  <button type = "submit" name = "submit">Return to CEO page</button>
</form>
</body>