<form action = "Login.php">
    <?php
        require_once 'connectToTheDB.php';

        // $variable_name = $_method_of_the_form['name_for_the_input']
        $Patient_ID = $_POST['username_pat'];
        $Patient_Pass = $_POST['password_pat'];

        $result = mysqli_query($conn, "SELECT * FROM user_account WHERE PATIENT_ID = '$Patient_ID'");
        $row = mysqli_fetch_assoc($result);
        if (mysqli_num_rows($result) > 0) {
            if ($Patient_Pass == $row["Password"] and ($Patient_ID != "BM100" and $Patient_ID != "Doctor")) { //not encrypted
                // should have an ID to keep track that cant be changed doesnt have ID right now SHOULD have session change so they can log-out and stay in
                header("location: patient.php"); //redirect to patient view
            }
            else if ($Patient_Pass == "12345") {
                header("location: Doc.php");
            }
            else if ($Patient_Pass ==  "admin") {
                header("location: CEO.php");
            }
            else {
                echo
                "<script> alert('Wrong password'); <script>";
            }
        }
        
        else {
            echo 
            "<script> alert('User not registered'); <script>";
        }

        //has code for the query
       

        if($result){
            echo 'Registered Specialist successfully!';
        }
        else{
            echo 'An error occured when registering as a specialist';
        }
    ?>
    <br></br>
    <button type = "submit" name = "submit" >Return to the main page</button>
</form>