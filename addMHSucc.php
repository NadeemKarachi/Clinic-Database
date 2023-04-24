<style>
  body {
    background-color: lightgray;
  }
</style>
<body>
    <?php
        include_once 'connectToTheDB.php';

        $Pat_ID = $_POST['Pat_ID'];
        $Pat_Name  = $_POST['Pat_Name'];
        $Pat_Age = $_POST['Pat_Age'];
        $Pat_Sex = $_POST['Pat_Sex'];
        $Pat_Test = $_POST['Pat_Test'];
        $Pat_Result  = $_POST['Pat_Result'];
        $Asso_Phy = $_POST['Asso_Phy'];
        $Asso_Spec = $_POST['Asso_Spec'];
        $Apt_Date = $_POST['Apt_Date'];
        $Emp_ID = $_POST['Emp_ID'];
        $Pat_TD = $_POST['Pat_TD'];
        $Med_ID = $_POST['Med_ID'];

        $sql = "INSERT INTO medical_history(Patient_ID, Patient_Name, Diagnosis_Test, Diagnosis_Results, 
                            Asso_Physician, Asso_Specialist, Patient_Age, Patient_Sex, Appointment_Time, Date_Created, 
                            Last_Modified_Date, Last_Modified_By, Medical_History_ID, Flagged_Delete)
                VALUES('$Pat_ID', '$Pat_Name', '$Pat_Test', '$Pat_Result', 
                       '$Asso_Phy', '$Asso_Spec', '$Pat_Age', '$Pat_Sex', '$Apt_Date', '$Pat_TD', 
                       '$Pat_TD', '$Emp_ID', '$Med_ID', 0);";

        $result = mysqli_query($conn, $sql);

        if($result){
            echo "Medical History has been added successfully!";
        }
        else{
            echo "Sorry we can not add this Medical History";
        }
    ?>
</body>
<form action = "Doc.php">
    <button type = "submit" name = "submit">Return to Patient History page</button>
</form>