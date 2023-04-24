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

  $DeptUName = $_POST['DeptUName'];
  $DeptUSpecialist = $_POST['DeptUSpecialist'];
  $DeptULast_Modified = date('Y-m-d');
  $DeptUModified_By = $_POST['DeptUModified_By'];

  $sql = "UPDATE departments
          SET Head_Specialist = '$DeptUSpecialist', Last_Modified_Date = '$DeptULast_Modified', Last_Modified_By = '$DeptUModified_By'
          WHERE Department_Name = '$DeptUName' AND Flagged_Delete = 0;";
  $result = mysqli_query($conn, $sql);

  if($result) {
    echo 'Department Updated';
  } else {
    echo 'Department Update Failed';
  }
?>
<form action = "CEO.php">
  <button type = "submit" name = "submit">Return to CEO page</button>
</form>
</body>