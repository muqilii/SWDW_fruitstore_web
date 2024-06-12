<?php
include "connectDB.php";

$sql = "SELECT * FROM inventory";

$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    echo "<h2>Inventory</h2>";
    echo "<table border='1'>";
	
    // print the heading of the table
    echo "<tr>";
    // print each column name
    while ($property = mysqli_fetch_field($result)) {
        echo "<th>".$property->name."</th>";
    }
    echo "</tr>";

    // get number of columns
    $fields = mysqli_num_fields($result);

    // Get each row data
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        for ($f = 0; $f < $fields; $f++) {           
            echo "<td>".$row[$f]."</td>"; 
        }
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}


    // Add fruits
    echo "<form action=\"add_fruit.php\" method=\"post\">";
    echo "<label for=\"fruit\">Fruit:</label><br>";
    echo "<input type=\"text\" id=\"fruit\" name=\"fruit\"><br>";
    echo "<input type=\"submit\" value=\"Add Fruit\">";
    echo "</form>";

    // Delete fruits
    echo "<form action=\"delete_fruit.php\" method=\"post\">";
    echo "<label for=\"fruit\">Fruit to delete:</label><br>";
    echo "<input type=\"text\" id=\"fruit\" name=\"fruit\"><br>";
    echo "<input type=\"submit\" value=\"Delete Fruit\">";
    echo "</form>";

    // Edit fruits
    echo "<form action=\"edit_fruit.php\" method=\"post\">";
    echo "<label for=\"fruit\">Fruit:</label><br>";
    echo "<input type=\"text\" id=\"oddfruit\" name=\"oddfruit\"><br>";
    echo "<label for=\"fruit\">Fruit to edit:</label><br>";
    echo "<input type=\"text\" id=\"newfruit\" name=\"newfruit\"><br>";
    echo "<label for=\"new_amount\">New Amount:</label><br>";
    echo "<input type=\"text\" id=\"amount\" name=\"amount\"><br>";
    echo "<label for=\"new_cost\">New Buying Price:</label><br>";
    echo "<input type=\"text\" id=\"cost\" name=\"cost\"><br>";
    echo "<label for=\"new_price\">New Selling Price:</label><br>";
    echo "<input type=\"text\" id=\"price\" name=\"price\"><br>";
    echo "<input type=\"submit\" value=\"Edit Fruit\">";
    echo "</form>";

mysqli_close($conn);
?>