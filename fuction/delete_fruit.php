<?php
    // Connect to database
    include "connectDB.php"; 

    $fruit = $_POST["fruit"];

    // Delete the fruit from the database
    $sql = "DELETE FROM inventory WHERE fruit = '$fruit'";

    if ($conn->query($sql) === TRUE) {
        echo "Success.<br><hr><br> Go to <a href='index.php'> Admin Page </a>";
    } else {
        echo "Error deleting fruit: " . $conn->error;
    }

    $conn->close();

?>
