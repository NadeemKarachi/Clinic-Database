<style>
  body {
    background-color: lightgray;
  }
</style>
<body>
<?php
  include_once 'connectToTheDB.php';

  $OSVUOffice_ID = $_POST['OSVUOffice_ID'];
  $OSVUBudget = $_POST['OSVUBudget'];

  $sql = "UPDATE offices
          SET BUDGET = $OSVUBudget
          WHERE OFFICE_ID = '$OSVUOffice_ID';";
  $result = mysqli_query($conn, $sql);

  if($result) {
    echo 'Office Updated!';
  } else {
    echo 'Office Update Failed';
  }
?>
<form action = "CEO.php">
  <button type = "submit" name = "submit">Return to CEO page</button>
</form>
</body>