<style>
  body {
    background-color: lightgray;
  }
</style>
<body>
<?php
    include_once 'connectToTheDB.php';

    $Item = $_POST['Inv_name'];
    $sql = "UPDATE inventory SET Flagged_Delete = 1 WHERE Inventory_ID = '$Item' AND Flagged_Delete = 0";

    $result = mysqli_query($conn, $sql);

    if($result){
        echo "Item has been removed";
    }
    else{
        echo "Sorry we can not remove this Item";
    }
?>
</body>
<form action = "Doc.php">
    <button type = "submit" name = "submit" >Return to the main page</button>
</form>