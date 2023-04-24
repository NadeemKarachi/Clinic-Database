<style>
  body {
    background-color: lightgray;
  }
</style>
<body>
<?php 

include_once 'connectToTheDB.php';

$Spec_ID = $_POST['Spec_ID'];
$Spec_Name = $_POST['Spec_Name'];
$Spec_Off = $_POST['Spec_Off'];
$Spec_Dept = $_POST['Spec_Dept'];
$Spec_Sex = $_POST['Spec_Sex'];
$Spec_DOB = $_POST['Spec_DOB'];
$Spec_Ava = $_POST['Spec_Ava'];
$Spec_Prac = $_POST['Spec_Prac'];
$Spec_em = $_POST['Spec_em'];
$Spec_num = $_POST['Spec_num'];
$Spec_DFE = $_POST['Spec_DFE'];
$Spec_YID = $_POST['Spec_YID'];
$Spec_YHD = $_POST['Spec_YHD'];
$Spec_supID = $_POST['Spec_supID'];
$Spec_TD = $_POST['Spec_TD'];

$sql = "INSERT INTO specialist(Employee_ID, Employee_Name, Asso_Office, Asso_Department, Sex, Date_Of_Birth, Available, 
                               Specialist_Practice, Employee_Email, Employee_Phone, Date_First_Employed, Years_In_Department, 
                               Years_as_head_of_Department, Supervisor_ID, Date_Created, Last_Date_Modified, Last_Modified_By, 
                               Flagged_Delete)
        VALUES('$Spec_ID', '$Spec_Name', '$Spec_Off', '$Spec_Dept', '$Spec_Sex', '$Spec_DOB', '$Spec_Ava', '$Spec_Prac', 
               '$Spec_em', '$Spec_num', '$Spec_DFE', $Spec_YID, $Spec_YHD, '$Spec_supID', '$Spec_TD', '$Spec_TD', 'BM100', 0);";

$result = mysqli_query($conn, $sql);

if($result){
    echo "Specialist registered successfully";
}
else{
    echo "Sorry it looks like we could not register this specialist";
}
?>
</body>
<form action = "CEO.php">
    <button type = "submit" name = "submit">Return to CEO page</button>
</form>
