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
  <h1>Create New Office</h1>

  <section id = "OSVCOverview">
    <form action = "office_create2.php" method = "POST">
      <label for = "OSVCOffice_ID">Office ID:</label>
      <input type = "text" id = "OSVCOffice_ID" OSVCOffice_ID = "OSVCOffice_ID" name = "OSVCOffice_ID" maxlength = "1">

      <label for = "OSVCAddress">Address:</label>
      <input type = "text" id = "OSVCAddress" OSVCAddress = "OSVCAddress" name = "OSVCAddress" maxlength = "40">

      <label for = "OSVCDate">Date Estabished:</label>
      <input type = "date" id = "OSVCDate" OSVCDate = "OSVCDate" name = "OSVCDate">

      <label for = "OSVCBudget">Budget Allocation:</label>
      <input type = "number" id = "OSVCBudget" OSVCBudget = "OSVCBudget" name = "OSVCBudget">
      
      <br></br>
      <button type = "submit"  name = "submit">Add Office</button>
      <button type = "submit" name = "submit_c" formaction = "CEO.php">Return to CEO page</button>
    </form>
  </section>
</body>
