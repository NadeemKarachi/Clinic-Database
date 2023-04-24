<style>
  body {
    background-color: lightgray;
  }
</style>
<body>
<?php
    include_once 'connectToTheDB.php';

    $Spec = $_POST['Spec_ID'];
    $sql = "UPDATE specialist SET Flagged_Delete = 1 WHERE Employee_ID = '$Spec' AND Flagged_Delete = 0";

    $result = mysqli_query($conn, $sql);

    if($result){
        echo "Specialist has been removed";
    }
    else{
        echo "Sorry we can not remove this specialist";
    }
?>
</body>
<form action = "CEO.php">
    <button type = "submit" name = "submit" >Return to the main page</button>
</form>