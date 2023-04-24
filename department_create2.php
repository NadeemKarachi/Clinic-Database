<style>
  body {
    background-color: lightgray;
  }
</style>
<body>
<?php
  include_once 'connectToTheDB.php';

  $DeptCName = $_POST['DeptCName'];
  $DeptCOffice = $_POST['DeptCOffice'];
  $DeptCSpecialist = $_POST['DeptCSpecialist'];
  $Date_Created = date('Y-m-d');
  $Last_Modified_Date = date('Y-m-d');
  $Last_Modified_By = $_POST['DeptCModifiedBy'];

  $sql = "INSERT INTO departments(Department_Name, Asso_Office, Head_Specialist, Date_Created, Last_Modified_Date, Last_Modified_By, Flagged_Delete)
  VALUES ('$DeptCName', '$DeptCOffice', '$DeptCSpecialist', '$Date_Created', '$Last_Modified_Date', '$Last_Modified_By', 0);";
  $result = mysqli_query($conn, $sql);

  $sql2 = "UPDATE specialist SET Supervisor_ID = NULL WHERE Employee_ID = '$DeptCSpecialist';";
  $result2 = mysqli_query($conn, $sql2);

  if($result && $result2) {
    echo 'New Department Created!';
  } else {
    echo 'Department Creaton Failed';
  }
?>
<form action = "CEO.php">
  <button type = "submit" name = "submit">Return to CEO page</button>
</form>
</body>