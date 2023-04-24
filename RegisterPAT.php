<form action = "Login.php">
    <?php
        include_once 'connectToTheDB.php';

        // $variable_name = $_method_of_the_form['name_for_the_input']
        $Patient_ID = $_POST['username_pat'];
        $Patient_Pass = $_POST['password_pat'];
        $Patient_Email = $_POST['email_pat'];
        $Patient_Phone = $_POST['phonenumber_pat'];
        $Date_Of_Birth = $_POST['date_of_birth_pat'];
        $Patient_Address = $_POST['address_pat'];
        $Date_Created = $_POST['Today_Date_pat'];
        $Last_Modifiied = $_POST['Today_Date_pat'];
        $Last_Modified_By = $_POST['username_pat'];

        $Sex = $_POST['Sex'];
        $Name = $_POST['name_pat'];
        $Patient_Age = $_POST['p_age'];


        //has code for the query
        $sql = "INSERT INTO user_account(Patient_ID, `Password`, Date_Of_Birth, `Address`, Phone_Number, Email, Date_Created, Last_Modified_Date, Last_Modified_By, Flagged_Delete)
        VALUES ('$Patient_ID', '$Patient_Pass', '$Date_Of_Birth', '$Patient_Address', '$Patient_Phone', '$Patient_Email',  '$Date_Created', '$Last_Modifiied', '$Last_Modified_By', 0);";
        $result = mysqli_query($conn, $sql); //creates the query

        $sql2 = "INSERT INTO patients(Patient_ID, `Name`, Patient_Phone_Number, Patient_Email, Date_Of_Birth, Patient_Age, Patient_Sex, Patient_Address, Physician_Approval, Date_Created, Last_Modified_Date, Last_Modified_By, Flagged_Delete)
        VALUES('$Patient_ID', '$Name', '$Patient_Phone', '$Patient_Email', '$Date_Of_Birth', '$Patient_Age', '$Sex', '$Patient_Address', 0, '$Date_Created', '$Last_Modifiied', '$Last_Modified_By', 0);";
        $result2 = mysqli_query($conn, $sql2);

        if($result && $result2){
            echo 'Registered Patient Successfully!';
        }
        else{
            echo 'An error occured when registering as a patient';
        }
    ?>
    <br></br>
    <button type = "submit" name = "submit" >Return to the main page</button>
</form>