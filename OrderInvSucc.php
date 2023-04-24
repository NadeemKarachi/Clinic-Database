<?php 
    include_once 'connectToTheDB.php';

    $Inventory_ID = $_POST['Inv_name'];
    $Inventory_Count = $_POST['Inv_Count'];
    $Modified_Date = date('Y-m-d');

    $sqlS = "SELECT Inventory_Count FROM inventory WHERE Inventory_ID = '$Inventory_ID';";
    $resultS = mysqli_query($conn, $sqlS);
    $rowS = mysqli_fetch_assoc($resultS);
    $add = $rowS['Inventory_Count'];

    $sql = "UPDATE inventory
            SET inventory.Inventory_Count = $Inventory_Count + $add, inventory.Last_Modified_Date = '$Modified_Date'
            WHERE inventory.Inventory_ID = '$Inventory_ID' AND inventory.Flagged_Delete = 0;";
    $result = mysqli_query($conn, $sql);

    if($result){
        echo "You order has been placed";
    }
    else{
        echo "Sorry it looks that we are not able to place your order at this time";
    }
?>
<form action = "Doc.php">
    <button type = "submit" name = "submit" >Return to the main page</button>
</form>