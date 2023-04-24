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
  <h1>Add a Physician</h1>
  <form action = "createPhysicianSucc.php" method = "POST">
    <label for = "Phy_ID">Physician ID:</label>
    <input type = "text" id = "Phy_ID" Phy_ID = "Phy_ID" name = "Phy_ID" maxlength = "7" placeholder = "No longer than 7 char">

    <label for = "Phy_Name">Physician Name:</label>
    <input type = "text" id = "Phy_Name" Phy_Name = "Phy_Name" name = "Phy_Name" maxlength = "30">

    <label for = "Phy_Off">Physician's Associated Office:</label>
    <select id = "Phy_Off" Phy_Off = "Phy_Off" name = "Phy_Off">
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

    <label for = "Phy_Dept">Physician's Associated Department:</label>
    <select id = "Phy_Dept" Phy_Dept = "Phy_Dept" name = "Phy_Dept">
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

    <label for = "Phy_Sex">Sex: </label>
    <select id = "Phy_Sex" Phy_Sex = "Phy_Sex" name = "Phy_Sex">
        <option value = "M">Male</option>
        <option value = "F">Female</option>
        <option value = "O">Other</option>
    </select>

    <label for = "Phy_DOB">Date of Birth:</label>
    <input type = "date" id = "Phy_DOB" Phy_DOB = "Phy_DOB" name = "Phy_DOB">
    <br></br>

    <label for = "Phy_Ava">Availability: </label>
    <input type = "text" id = "Phy_Ava" Phy_Ava = "Phy_Ava" name = "Phy_Ava" placeholder = "Mon-Fri 8:00 AM - 5:00 PM " maxlength = "1000">

    <label for = "Phy_em">Physician Email: </label>
    <input type = "text" id = "Phy_em" Phy_em = "Phy_em" name = "Phy_em" placeholder = "john@gmail.com" maxlength = "1000">

    <label for = "Phy_num">Physician Phone Number: </label>
    <input type = "text" id = "Phy_num" Phy_num = "Phy_num" name = "Phy_num" placeholder = "XXXXXXXXXX" maxlength = "10">
    <br></br>

    <label for = "Phy_DFE">Date First Employed:</label>
    <input type = "date" id = "Phy_DFE" Phy_DFE = "Phy_DFE" name = "Phy_DFE">

    <label for = "Phy_Sal">Physician Salary: </label>
    <input type = "number" id = "Phy_Sal" Phy_Sal = "Phy_Sal" name = "Phy_Sal">

    <label for = "Phy_TD">Today's Date:</label>
    <input type = "date" id = "Phy_TD" Phy_TD = "Phy_TD" name = "Phy_TD">
    <br></br>
    <button type = "submit" name = "submit" >Finish Registering Physician</button>
    <button type = "submit" name = "submit_s" formaction="CEO.php">Return to main page</button>
  </form>
</body>