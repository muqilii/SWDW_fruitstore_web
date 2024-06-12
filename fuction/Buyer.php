
<!DOCTYPE html>
<html>
<head>
	<title>Buyer Page</title>
	<style>
	.box0{
		text-align: center;
		width: 200px;
		height: 200px;
		font-family: Times, Serif;
	}
	.box1{
		position: relative;
		left: 50px;
	}
	.box2{
		position: absolute;
		
		left: 100px;
	}
	.box3{
		position: relative;
		left: 50px;
	}
	.box4{
		background: linear-gradient(to right, #0099ff 5%, #669999 100%);
		color: white;
		width: 150px;
		height: 25px;
		border-style: outset;
	}
	.box5{
		position: absolute;
		top: 250px;
		left: 80px;
	}
</style>
</head>
<body>
	<div class="box0">
		<h1 class="box1">Buy Fruits</h1>
		
		<form action="buyerprocess.php" method="POST" id="buy-form">
			<div><br>
			<div class="box3">
				<label for="fruit">Select Fruits:</label>
				
				<select id="fruit" name="fruit">
					<?php
					// Connect to the database
					include 'connectDB.php';
					// Query to select the fruit names from the inventory table
					$sql = "SELECT fruit, price FROM inventory";
					// Execute the query
					$result = $conn->query($sql);
					// Check if any rows are returned
					if ($result->num_rows > 0) {
						// Loop through the rows and display the fruit names as options
						while ($row = $result->fetch_assoc()) {
							$fruit = $row["fruit"];
							$price = $row["price"];
							echo "<option value='$fruit'>$fruit: $price per kg</option>";
						}
					}
					// Close the database connection
					$conn->close();
					?>
				</select><br>
				<label for="amount">Amount (kg):</label>
				<input required="required" type="number" id="amount" name="amount"><br><br>
				<input class="box4" type="submit" id="buy-btn" value="Buy">
			</div>
			</div>
		</form>
		<br>
		<div class="box2">
			<button onclick="showPicture()">Show the fruit</button><br>
		</div>
	</div>
	<div class="box0">
		<div class="box5">
		<h2>Selected Fruit:</h2>
		<div id="picture"></div>
	</div>
	</div>

	<script>
		function showPicture() {
			var name = document.getElementById('fruit').value;
			var img;
			if (name == "apple") {
				img = "<img src='apple.jpg' alt='Apple' class='fruit-image' width='100' height='100'>";
			} else if (name == "banana") {
				img = "<img src='banana.jpg' alt='Banana' class='fruit-image' width='100' height='100'>";
			} else if (name == "orange") {
				img = "<img src='orange.jpg' alt='Orange' class='fruit-image' width='100' height='100'>";
			} else if (name == "cherry") {
				img = "<img src='cherry.jpg' alt='cherry' class='fruit-image' width='100' height='100'>";
			} else if (name == "grape") {
				img = "<img src='grape.jpg' alt='grape' class='fruit-image' width='100' height='100'>";
			}
			document.getElementById('picture').innerHTML = img;
		}
	</script>
</body>
</html>
