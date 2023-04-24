<style>
  body {
    background-color: lightgray;
  }
</style>
<body>
<?php
    include_once 'connectToTheDB.php';

    $off_ID = $_POST['off_ID'];

    $sql = "UPDATE offices SET FLagged_Delete = 1 WHERE OFFICE_ID = '$off_ID' AND Flagged_Delete = 0;";

    $result = mysqli_query($conn, $sql);

    if($result){
        echo "Office has been Removed";
    }
    else{
        echo "Sorry we can not delete that office";
    }
?>
</body>
<form action = "CEO.php">
    <button type = "submit" name = "submit" >Return to the main page</button>
</form>