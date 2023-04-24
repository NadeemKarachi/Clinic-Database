<style>
  body {
    background-color: lightgray;
  }
</style>
<body>
    <?php
        include_once 'connectToTheDB.php';

        $dep = $_POST['dept_ID'];

        $sql = "UPDATE departments SET Flagged_Delete = 1 WHERE Department_Name = '$dep' AND Flagged_Delete = 0;";

        $result = mysqli_query($conn, $sql);

        if($result){
            echo "Department has been Removed";
        }
        else{
            echo "Sorry we can not delete that department";
        }
    ?>
</body>
<form action = "CEO.php">
    <button type = "submit" name = "submit" >Return to the main page</button>
</form>