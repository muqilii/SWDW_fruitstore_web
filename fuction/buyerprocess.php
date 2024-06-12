
<?php

// Connect to database
include "connectDB.php"; 


// Retrieve the purchase details
$purchase = array();
$total_price = 0;
$fruit	= $_POST["fruit"];
$amount	= $_POST["amount"];
    
//Check if amount is bigger than 0
if ($amount > 0) {

    // Check if we have enough fruit
    $sql = "SELECT amount FROM inventory WHERE fruit='$fruit'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $inventory_amount = $row['amount'];
    if ($amount > $inventory_amount) {
        echo "Error: Not enough fruit in inventory.";      
        $link = "<p>Go to <a href='Buyer.php'>Buyer Page</a></p>";
        echo $link;
            exit;
        }

    // Retrieve the price of the fruit
    $sql = "SELECT fruit, amount, price FROM inventory WHERE fruit='$fruit'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $purchase[$fruit] = $amount;
    $total_price += $amount * $row['price'];
    
}
else {
    echo "Error: Amount must be bigger than 0";
   
$link = "<p>Go to <a href='Buyer.php'>Buyer Page</a></p>";
echo $link;

    exit;
}


// Update the user's fruit amounts in the database
$sql1 = "UPDATE inventory SET amount = amount - $amount WHERE fruit = '$fruit'";
mysqli_query($conn, $sql1);

// Update the user's cash amount in the database
$sql2 = "UPDATE inventory SET cash = cash + $total_price";
mysqli_query($conn, $sql2);


// Generate receipt
echo "<h2>Purchase Receipt</h2>";
echo "<table border='1' cellpadding='5'>";
echo "<tr><th>Fruit</th><th>Quantity</th><th>Price</th></tr>";
foreach ($purchase as $fruit => $amount) {
    $sql = "SELECT price FROM inventory WHERE fruit='$fruit'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $price = $row['price'];
    echo "<tr><td>$fruit</td><td>$amount kg</td><td>$price CNY/kg</td></tr>";
}
echo "<tr><td colspan='2' align='right'><strong>Total Price:</strong></td><td><strong>$total_price CNY</strong></td></tr>";
echo "<tr><td colspan='2' align='right'><strong>Purchase Date:</strong></td><td><strong>" . date("Y/m/d") . "</strong></td></tr>";
echo "</table>";
echo "<p style='color: green; font-size: 18px; font-weight: bold;'>Purchase successful!</p>";

$link = "<p>Go to <a href='Buyer.php'>Buyer Page</a></p>";
        echo $link;


?>
