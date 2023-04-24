<?php
    include_once 'connectToTheDB.php';

    $MHID = $_POST['MHID'];
    $DT = $_POST['DT'];

    $sql = "UPDATE medical_history SET Diagnosis_Test = '$DT' WHERE Medical_History_ID = '$MHID';";

    $result = mysqli_query($conn, $sql);

    if($result){
        echo "The medical history of this patient has successfully been updated";
    }
    else{
        echo "Sorry it looks like we could not update this patients medical history";
    }
?>

<form action = "Doc.php">
    <button type = "submit" name = "submit">Return to Patient History page</button>
</form>