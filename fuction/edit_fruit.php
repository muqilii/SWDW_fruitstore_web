<?php
    // Connect to database
    include "connectDB.php";

    // Get the fruit ID and new values 
    $oddfruit = $_POST["oddfruit"];
    $newfruit = $_POST["newfruit"];
    $amount = $_POST["amount"];
    $cost = $_POST["cost"];
    $price = $_POST["price"];

    // Update the fruit in the database
   $sql = "UPDATE inventory SET fruit='$newfruit', amount='$amount', cost='$cost', price='$price' WHERE fruit='$oddfruit'";

    if ($conn->query($sql) === TRUE) {
        echo "Success.<br><hr><br> Go to <a href='index.php'> Admin Page </a>";
    } else {
        echo "Error updating fruit: " . $conn->error;
    }

    $conn->close();

?>
