<style>
    body {
      background-color: lightgray;
    }

    h1 {
      font-family: "Times New Roman";
      text-align: center;
      background-color: mediumseagreen;
      border: 4px solid green;
      border-style: double;
  }
</style>

<body>
  <h1>Add a Specialist</h1>
  <form action = "createSpecialistSucc.php" method = "POST">
    <label for = "Spec_ID">Specialist ID:</label>
    <input type = "text" id = "Spec_ID" Spec_ID = "Spec_ID" name = "Spec_ID" maxlength = "7" placeholder = "No longer than 7 char">

    <label for = "Spec_Name">Specialist Name:</label>
    <input type = "text" id = "Spec_Name" Spec_Name = "Spec_Name" name = "Spec_Name" maxlength = "30">

    <label for = "Spec_Off">Specialist's Associated Office:</label>
    <select id = "Spec_Off" Spec_Off = "Spec_Off" name = "Spec_Off">
        <?php 
            include_once 'connectToTheDB.php';

            $sqlOff = "SELECT * FROM offices;";
            $resultOff = mysqli_query($conn, $sqlOff);

            while($rOff = mysqli_fetch_array($resultOff)){

        ?>
        <option value = "<?php echo $rOff['OFFICE_ID'];?>"><?php echo $rOff['ADDRESS'];?></option>
        <?php
            }
        ?>
    </select>

    <br></br>

    <label for = "Spec_Dept">Specialist's Associated Department:</label>
    <select id = "Spec_Dept" Spec_Dept = "Spec_Dept" name = "Spec_Dept">
        <?php 
            include_once 'connectToTheDB.php';

            $sqlDept = "SELECT * FROM departments;";
            $resultDept = mysqli_query($conn, $sqlDept);

            while($rDept = mysqli_fetch_array($resultDept)){

        ?>
        <option value = "<?php echo $rDept['Department_Name'];?>"><?php echo $rDept['Department_Name'];?></option>
        <?php
            }
        ?>
    </select>

    <label for = "Spec_Sex">Sex: </label>
    <select id = "Spec_Sex" Spec_Sex = "Spec_Sex" name = "Spec_Sex">
        <option value = "M">Male</option>
        <option value = "F">Female</option>
        <option value = "O">Other</option>
    </select>

    <label for = "Spec_DOB">Date of Birth:</label>
    <input type = "date" id = "Spec_DOB" Spec_DOB = "Spec_DOB" name = "Spec_DOB">

    <label for = "Spec_Ava">Availability: </label>
    <input type = "text" id = "Spec_Ava" Spec_Ava = "Spec_Ava" name = "Spec_Ava" placeholder = "Mon-Fri 8:00 AM - 5:00 PM " maxlength = "1000">
    <br></br>

    <label for = "Spec_Prac">Specialist Practice: </label>
    <input type = "text" id = "Spec_Prac" Spec_Prac = "Spec_Prac" name = "Spec_Prac" placeholder = "Cardiologist" maxlength = "1000">

    <label for = "Spec_em">Specialist Email: </label>
    <input type = "text" id = "Spec_em" Spec_em = "Spec_em" name = "Spec_em" placeholder = "john@gmail.com" maxlength = "1000">

    <label for = "Spec_num">Specialist Phone Number: </label>
    <input type = "text" id = "Spec_num" Spec_num = "Spec_num" name = "Spec_num" placeholder = "XXXXXXXXXX" maxlength = "10">

    <label for = "Spec_DFE">Date First Employed:</label>
    <input type = "date" id = "Spec_DFE" Spec_DFE = "Spec_DFE" name = "Spec_DFE">
    <br></br>

    <label for = "Spec_YID">Years in Department: </label>
    <input type = "number" id = "Spec_YID" Spec_YID = "Spec_YID" name = "Spec_YID">

    <label for = "Spec_YHD">Years as Head of Department: </label>
    <input type = "number" id = "Spec_YHD" Spec_YHD = "Spec_YHD" name = "Spec_YHD">

    <label for = "Spec_supID">Supervisor ID:</label>
    <select id = "Spec_supID" Spec_supID = "Spec_supID" name = "Spec_supID">
        <?php 
             include_once 'connectToTheDB.php';

             $sqlSup = "SELECT * FROM specialist WHERE Supervisor_ID IS NULL;";
             $resultSup = mysqli_query($conn, $sqlSup);

             while($rSup = mysqli_fetch_array($resultSup)){
        ?>
        <option value = "<?php echo $rSup['Employee_ID'];?>"><?php echo $rSup['Employee_Name'];?></option>

        <?php
             }
        ?>
    </select>

    <label for = "Spec_TD">Today's Date:</label>
    <input type = "date" id = "Spec_TD" Spec_TD = "Spec_TD" name = "Spec_TD">
    <br></br>
    <button type = "submit" name = "submit" >Finish Registering Specialist</button>
    <button type = "submit" name = "submit_s" formaction="CEO.php">Return to main page</button>
  </form>