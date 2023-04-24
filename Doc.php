<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link href="doc_style.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <h1>Welcome, Doctors</h1>
  <script src="doc_script.js"></script>

  <section id="overview">
    <button id="SVtoggle" onclick="toggleSV()">Show Specialist Schedule </button>
    <button id="PVtoggle" onclick="togglePV()">Show Patients Medical History</button>
    <button id="IVtoggle" onclick="toggleIV()">Show Inventory</button>
  </section>

  <section id="SV">
    <h2 id="schedule">Schedule</h2>
    <form action = "show_schedule.php" method = "GET">
      <label for = "SVinput">Please input Specialist ID:</label>
      <input type = "text" id = "SVinput" SVinput = "SVinput" name = "SVinput">

      <label for = "SV_DT">Please input the minimum date and time from which you would like to see the appointments:</label>
      <input type = "datetime-local" id = "SV_DT" SV_DT = "SV_DT" name = "SV_DT">
      <button type = "submit" id = "SVsubmit" name = "SVsubmit">View Schedule </button>
    </form>
  </section>

  <section id="PV">
    <h2 id="patients">Patients</h2>
    <form action = "show_patients.php" method = "GET">
      <label for = "PVinput">Please select a patient to see their history:</label>
      <select id = "PVinput" PVinput = "PVinput" name = "PVinput">
        <?php 
          include_once 'connectToTheDB.php';

          $sqlP = "SELECT * FROM patients WHERE Flagged_Delete = 0;";
          $resultP =  mysqli_query($conn, $sqlP);

          while($rP = mysqli_fetch_array($resultP)){
        ?>
            <option value = "<?php echo $rP['Patient_ID']; ?>"><?php echo $rP['Name']; ?></option>
        <?php
          }
        ?>
      </select>

      <br></br>
      <button type = "submit" id = "PVsubmit" name = "PVsubmit">View Patients </button>
      <br></br>
      <button type = "submit" name = "submit_s" formaction = "addMH.php">Add Medical History for a Patient</button>
      <button type = "submit" name = "submit_s" formaction = "changeMH.php">Change Medical History for a Patient</button>
    </form>
  </section>
  
  <section id="IV">
    <h2 id="inventory">Inventory</h2>
    <form action = "show_inv.php" method = "GET">
      <label for = "IVinput">Please input the name to see its inventory:</label>
      <select id = "IVinput" IVinput = "IVinput" name = "IVinput">
      <?php 
            include_once 'connectToTheDB.php';

            $sqlI = "SELECT * FROM inventory WHERE Flagged_Delete = 0;";
            $resultI =  mysqli_query($conn, $sqlI);

            while($rI = mysqli_fetch_array($resultI)){
          ?>
              <option value = "<?php echo $rI['Inventory_Name']; ?>"><?php echo $rI['Inventory_Name']; ?></option>
          <?php
            }
          ?>
      </select>
      <br></br>
      <button type = "submit" id = "IVsubmit" name = "IVsubmit">View Inventory </button>

      <br></br>
      <button type = "submit" name = "submit_s" formaction = "addinv.php">Add New Item</button>
      <button type = "submit" name = "submit_s" formaction = "OrderInv.php">Update an Item</button>
      <button type = "submit" name = "submit_sd" formaction = "deleteInv.php">Delete Existing Item</button>
    </form>

    
  </section>

  
  <button onclick = "location.replace('Login.php');">Log out</button>
</body>

<footer>
  <address>Main Office: 1234 Oaks Dr.</address>
  <p>Established: 1980-04-07</p>
</footer>

</html>