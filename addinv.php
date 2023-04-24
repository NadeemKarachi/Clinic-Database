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
  <h1>Add Item</h1>
  <form action = "addInvSucc.php" method = "POST">
    <label for = "Inv_ID">Item ID:</label>
    <input type = "number" id = "Inv_ID" Inv_ID = "Inv_ID" name = "Inv_ID">

    <label for = "Inv_Name">Item Name:</label>
    <input type = "text" id = "Inv_Name" Inv_Name = "Inv_Name" name = "Inv_Name" maxlength = "30">

    <label for = "Inv_Off">Office Location:</label>
    <select id = "Inv_Off" Inv_Off = "Inv_Off" name = "Inv_Off">
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

    <label for = "Inv_Count">Amount: </label>
    <input type = "text" id = "Inv_Count" Inv_Count = "Inv_Count" name = "Inv_Count">

    <label for = "Inv_cost">Cost per Unit:</label>
    <input type = "number" id = "Inv_cost" Inv_cost = "Inv_cost" name = "Inv_cost">

    <label for = "Inv_ED">Expiration Date:</label>
    <input type = "date" id = "Inv_ED" Inv_ED = "Inv_ED" name = "Inv_ED">
    
    <label for = "Mod_By">Please input your ID:</label>
    <input type = "text" id = "Mod_By" Mod_By = "Mod_By" name = "Mod_By">

    <label for = "Inv_TD">Today's Date:</label>
    <input type = "date" id = "Inv_TD" Inv_TD = "Inv_TD" name = "Inv_TD">
    <br></br>
    <button type = "submit" name = "submit" >Finish Adding Item</button>
    <button type = "submit" name = "submit_s" formaction="Doc.php">Return to main page</button>
  </form>
</body>