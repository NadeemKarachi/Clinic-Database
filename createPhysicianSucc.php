<style>
  body {
    background-color: lightgray;
  }
</style>
<body>
    <?php
        include_once 'connectToTheDB.php';

        $Phy_ID = $_POST['Phy_ID'];
        $Phy_Name  = $_POST['Phy_Name'];
        $Phy_Off = $_POST['Phy_Off'];
        $Phy_Dept = $_POST['Phy_Dept'];
        $Phy_Sex = $_POST['Phy_Sex'];
        $Phy_DOB = $_POST['Phy_DOB'];
        $Phy_em = $_POST['Phy_em'];
        $Phy_num = $_POST['Phy_num'];
        $Phy_Ava = $_POST['Phy_Ava'];
        $Phy_DFE = $_POST['Phy_DFE'];
        $Phy_Sal = $_POST['Phy_Sal'];
        $Phy_TD = $_POST['Phy_TD'];

        $sql = "INSERT INTO physician(Employee_ID, Employee_Name, Asso_Office, Asso_Department, Sex, Date_Of_Birth, Employee_Email,
                                      Employee_Phone, Available, Date_First_Employed, Salary, Date_Created, Last_Date_Modified, 
                                      Last_Modified_By, Flagged_Delete)
                VALUES('$Phy_ID', '$Phy_Name', '$Phy_Off', '$Phy_Dept', '$Phy_Sex', '$Phy_DOB', '$Phy_em', '$Phy_num', '$Phy_Ava',
                       '$Phy_DFE', '$Phy_Sal', '$Phy_TD', '$Phy_TD', 'BM100', 0);";

        $result = mysqli_query($conn, $sql);
        if($result){
            echo "Physician has been created successfully!";
        }
        else{
            echo "Sorry we can not add this Physician";
        }
    ?>
</body>
<form action = "CEO.php">
    <button type = "submit" name = "submit">Return to CEO page</button>
</form>
