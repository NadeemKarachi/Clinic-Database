<?php 
    include_once 'connectToTheDB.php';

    $Patient_ID = $_POST['Patient_ID'];
    $Appointment_Time = $_POST['Appointment_Time'];

    $sql = "UPDATE appointments
            SET appointments.Flagged_Delete = 1
            WHERE appointments.Appointment_Time = '$Appointment_Time' AND appointments.Flagged_Delete = 0";
    try{
        $result = mysqli_query($conn, $sql);
    }
    catch(Exception $e){

    }
    

    if($result){
        echo 'Your appointment has been canceled';
    }
    else{
        header("location: patient.php?error=".mysqli_error($conn));
        echo 'Sorry we are unable to cancel your appointment';
    }

    
?>
<form action = "patient.php">
    <button type = "submit" name = "submit" >Return to the main page</button>
</form>