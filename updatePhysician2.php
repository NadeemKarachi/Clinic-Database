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
    $sqlN = "SELECT Employee_Name FROM physician WHERE Employee_ID = '$SUpdateID';";
    $resultN = mysqli_query($conn, $sqlN);
    $rowN = mysqli_fetch_assoc($resultN);
    $SUpdateName = $rowN['Employee_Name'];
  }

  $SUpdateOffice = $_POST['Spe_Off'];
  $SUpdateDepartment = $_POST['Spe_Dept'];
  $SUpdateSex = $_POST['SUpdateSex'];
  
  if(!empty($_POST['SUpdateEmail'])){
    $SUpdateEmail = $_POST['SUpdateEmail'];
  }
  else{
    $sqlE = "SELECT Employee_Email FROM physician WHERE Employee_ID = '$SUpdateID';";
    $resultE = mysqli_query($conn, $sqlE);
    $rowE = mysqli_fetch_assoc($resultE);
    $SUpdateEmail = $rowE['Employee_Email'];
  }
  
  if(!empty($_POST['SUpdatePhone'])){
    $SUpdatePhone = $_POST['SUpdatePhone'];
  }
  else{
    $sqlP = "SELECT Employee_Phone FROM physician WHERE Employee_ID = '$SUpdateID';";
    $resultP = mysqli_query($conn, $sqlP);
    $rowP = mysqli_fetch_assoc($resultP);
    $SUpdatePhone = $rowP['Employee_Phone'];
  }
  
  if(!empty($_POST['SUpdateAvailable'])){
    $SUpdateAvailable = $_POST['SUpdateAvailable'];
  }
  else{
    $sqlA = "SELECT Available FROM physician WHERE Employee_ID = '$SUpdateID';";
    $resultA = mysqli_query($conn, $sqlA);
    $rowA = mysqli_fetch_assoc($resultA);
    $SUpdateAvailable = $rowA['Available'];
  }
  
  
  if(!empty($_POST['SUpdateSalary'])){
    $SUpdateSalary = $_POST['SUpdateSalary'];
  }
  else{
    $sqlS = "SELECT Salary FROM physician WHERE Employee_ID = '$SUpdateID';";
    $resultS = mysqli_query($conn, $sqlS);
    $rowS = mysqli_fetch_assoc($resultS);
    $SUpdateSalary = $rowS['Salary'];
  }

  $SUpdateLast_Modified = date('Y-m-d');
  $SUpdateModifiedBy = $_POST['SUpdateModifiedBy'];

  $sql = "UPDATE physician
          SET Employee_Name = '$SUpdateName', Asso_Office = '$SUpdateOffice', Asso_Department = '$SUpdateDepartment', Sex = '$SUpdateSex', Employee_Email = '$SUpdateEmail', Employee_Phone = '$SUpdatePhone', Available = '$SUpdateAvailable', Salary = $SUpdateSalary, Last_Date_Modified = '$SUpdateLast_Modified', Last_Modified_By = '$SUpdateModifiedBy'
          WHERE Employee_ID = '$SUpdateID';";
  $result = mysqli_query($conn, $sql);

  if($result) {
    echo 'Physician Updated';
  } else {
    echo 'Physician Update Failed';
  }
?>
<form action = "CEO.php">
  <button type = "submit" name = "submit">Return to CEO page</button>
</form>
</body>