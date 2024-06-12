<?php
// Connect to the database
include "connectDB.php";

$fruits = $_POST['fruits'];
$amount = $_POST['amount'];

// Update inventory
$sql = "SELECT cost FROM inventory WHERE fruit='$fruits'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$cost = $row['cost'];
$total_price = $cost * $amount;
$sql_check = "SELECT * FROM inventory WHERE cash < $total_price";
$result_check = mysqli_query($conn, $sql_check);
if (mysqli_num_rows($result_check) > 0 && $result) {
    echo "Sorry, we cannot buy that much from you now.<br><hr><br> Go back to <a href='Seller.php'>Seller Page</a>";
} else {
    // Update inventory
    $sql1 = "UPDATE inventory SET amount = amount + $amount WHERE fruit = '$fruits'";
    $sql2 = "UPDATE inventory SET cash = cash - $total_price";
    $result1 = mysqli_query($conn, $sql1);
    $result2 = mysqli_query($conn, $sql2);
    if ($result1 && $result2) {
        echo "You have updated the inventory successfully.<br>";

        // Generate receipt
        $datetime = date('Y-m-d H:i:s');
        $receipt = "Sold $amount kg of $fruits for $cost per kg\nTotal price: $total_price\nDate of purchase: $datetime";

        // Return receipt to seller
        echo $receipt;
    } else {
        echo "Failed to update the inventory. Please try again.<br><hr><br> Go back to <a href='Seller.php'>Seller Page</a>";
    }
}

// Close the database connection
$conn->close();
?>
