<?php
include 'db_config.php';

if(isset($_POST['save'])){
    $user_id = 1;

    $steps = $_POST['steps'];
    $water = $_POST['water'];
    $sleep = $_POST['sleep'];

    $query = "UPDATE user_dashboard 
              SET steps='$steps', water='$water', sleep='$sleep' 
              WHERE user_id='$user_id'";

    mysqli_query($conn, $query);

    echo "Data Saved!";
}
?>

<form method="POST">
    Steps: <input type="number" name="steps"><br><br>
    Water: <input type="text" name="water"><br><br>
    Sleep: <input type="text" name="sleep"><br><br>

    <button name="save">Save</button>
</form>