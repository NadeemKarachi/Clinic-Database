<style>
  body {
    background-color: lightgray;
  }
</style>
<body>
    <?php
        include_once 'connectToTheDB.php';

        $Inv_ID = $_POST['Inv_ID'];
        $Inv_Name  = $_POST['Inv_Name'];
        $Inv_Count  = $_POST['Inv_Count'];
        $Inv_Off = $_POST['Inv_Off'];
        $Inv_cost = $_POST['Inv_cost'];
        $Inv_TD = $_POST['Inv_TD'];
        $Inv_ED = $_POST['Inv_ED'];
        $Mod_By = $_POST['Mod_By'];

        $sql = "INSERT INTO inventory(Inventory_ID, Inventory_Name, Asso_Office, Inventory_Count, Inventory_Cost, Date_Purchased, Expiration_Date, Last_Modified_Date, Last_Modified_By, Flagged_Delete)
                VALUES('$Inv_ID', '$Inv_Name', '$Inv_Off', '$Inv_Count', '$Inv_cost', '$Inv_TD', '$Inv_ED', '$Inv_TD', '$Mod_By', 0);";

        $result = mysqli_query($conn, $sql);
        if($result){
            echo "Item has been added successfully!";
        }
        else{
            echo "Sorry we can not add this Item";
        }
    ?>
</body>
<form action = "Doc.php">
    <button type = "submit" name = "submit">Return to Doctors page</button>
</form>