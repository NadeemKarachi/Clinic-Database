<style>
  body {
    background-color: lightgray;
  }
</style>
<body>
<?php
    include_once 'connectToTheDB.php';

    $phy = $_POST['Phy_ID'];
    $sql = "UPDATE physician SET Flagged_Delete = 1 WHERE Employee_ID = '$phy' AND Flagged_Delete = 0";

    $result = mysqli_query($conn, $sql);

    if($result){
        echo "Physician has been removed";
    }
    else{
        echo "Sorry we can not remove this physician";
    }
?>
</body>
<form action = "CEO.php">
    <button type = "submit" name = "submit" >Return to the main page</button>
</form>