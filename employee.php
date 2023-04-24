<!DOCTYPE html>
<html>

<head>
    <!--This connects the HTML code to CSS code-->
    <link rel="stylesheet" href="patient.css">
    <title>Clinic Database</title>
</head>

<body>
    <p>Welcome!</p>
    <!--This connects to the JavaScript code -->
    <script src="patient.js"></script>

    <div class="tab">
        <button class="tabLink" onclick="tabButton(event, 'VA')">View Appointments</button>
        <button class="tabLink" onclick="tabButton(event, 'VS')">View Schedule</button>
        <button class="tabLink" onclick="tabButton(event, 'VPH')">View Patient History</button>
        <button class="tabLink" onclick="tabButton(event, 'VI')">View Inventory</button>
    </div>

    <div id="VA" class="tabContent">
        <p>You have no current appointments</p>
        <button>Change Appointment</button>
    </div>

    <div id="VI" class="tabContent">
        <!--Should eventually be hooked up to the database to show any TREATMENT available-->
        <p>You have no Inventory</p>
        <button>Prescribe Treatment</button>
    </div>

    <div id="VS" class="tabContent">
        <form>
            <!--Name of the patient with ID "patientID" that corresponds to Patient_ID to the DB-->
            <label for="EmployeeID">ID:</label>
            <input type="text" id="patientID" Patient_ID="patientID" maxlength="7">

            <!--Name of the patient with id "Name" that corresponds to Patient_Name to the DB-->
            <label for="Name">Name:</label>
            <input type="text" id="Name" Patient_Name="Name" maxlength="30">

            <!--Date of the appointment with ID "apptTime" that corresponds to Appointment_Time to the DB-->
            <label for="apptDate"> Date:</label>
            <input type="date" id="apptDate" Appointment_Time="apptDate">

            <label for="address">Office:</label>
            <input type = "text" id = "address" address = "address">
            <br></br>
            <button type = "submit">Search</button>
        </form>
        
    </div>

    <div id="VPH" class="tabContent">
        <form>
            <!--Should eventually be hooked up to the database to show any MEDICAL_HISTORY available for an existing PATIENT-->
            <label for = "Patient_ID">Please input the ID of the patient you are looking for:</label>
            <input type = "text" id = "Patient_ID" Patient_ID = "Patient_ID">
            <br></br>
            <button type = "submit">Search</button>
        </form>
        
    </div>
</body>

</html>