<form action = "patient.php">
    <?php
        include_once 'connectToTheDB.php';

        // $variable_name = $_method_of_the_form['name_for_the_input']
        $Patient_ID = $_POST['Patient_ID_Appointment'];
        $Patient_Name = $_POST['Patient_Name_Appointment'];
        $Appointment_Time = $_POST['Appointment_Time_Appointment'];
        $Office_Address = $_POST['Office_Address_Appointment'];
        $Physician_Approval = '';
        $Specialist_ID = '';
        if("" == $_POST['Physician_ID_Appointment_Yes']){
            $Physician_ID = $_POST['Physician_ID_Appointment_No'];
        }
        else{
            $Physician_ID = $_POST['Physician_ID_Appointment_Yes'];
            $Physician_Approval = $Physician_ID;
            $Specialist_ID = $_POST['Specialist_ID_Appointment'];
        }
        $Reason_For_Visit = $_POST['Reason_For_Visit_Appointment'];
        $Date_Created = $_POST['Date_Created_Appointment'];
        $Last_Modified_Date = $_POST['Date_Created_Appointment'];
        $Last_Modified_By = $_POST['Patient_ID_Appointment'];

        //has code for the query
        if($Physician_Approval == $Physician_ID){
            $sql = "INSERT INTO appointments(Patient_ID, Patient_Name, Appointment_Time, Office_Address, Physician_ID, Specialist_ID, Reason_For_Visit, Physician_Approval, Date_Created, Last_Modified_Date, Last_Modified_By) 
            VALUES ('$Patient_ID', '$Patient_Name', '$Appointment_Time', '$Office_Address', '$Physician_ID', '$Specialist_ID', '$Reason_For_Visit', '$Physician_Approval', '$Date_Created', '$Last_Modified_Date', '$Last_Modified_By');";
        }
        else{
            $sql = "INSERT INTO appointments(Patient_ID, Patient_Name, Appointment_Time, Office_Address, Physician_ID, Reason_For_Visit, Date_Created, Last_Modified_Date, Last_Modified_By) 
            VALUES ('$Patient_ID', '$Patient_Name', '$Appointment_Time', '$Office_Address', '$Physician_ID', '$Reason_For_Visit', '$Date_Created', '$Last_Modified_Date', '$Last_Modified_By');";
        }
    
        try{
            $result = mysqli_query($conn, $sql); //create query
        }
        catch(Exception $e){
    
        }

        if($result){
            echo 'Appointment created successfully!';
        }
        else{
            header("location: patient.php?error=".mysqli_error($conn));
            echo 'Sorry it looks like we could not create your appointment at this time';
        }
    ?>
    <br></br>
    <button type = "submit" name = "submit" >Return to the main page</button>
</form>