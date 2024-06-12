<?php 
    // Connect to database
    include "connectDB.php"; 

    $fruit = $_POST["fruit"]; 

    $sql = "INSERT INTO inventory (fruit, amount, cost, price, cash) VALUES ('$fruit', '0', '0', '0', '1000')";

    if ($conn->query($sql) === TRUE) { 
        echo "Success.<br><hr><br> Go to <a href='index.php'> Admin Page </a>";
    } else { 
        echo "Error: " . $sql . "<br>" . $conn->error; 
    } 

    $conn->close(); 
    
?>