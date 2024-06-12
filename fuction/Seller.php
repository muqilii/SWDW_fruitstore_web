<html>
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
		top: 77px;
		left: 180px;
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
</style>
<head>
	<title>Seller Page</title>
</head>
<body>
	<div class="box0">
	<h1 class="box1">Sell Fruits</h1>
	<div class="box2">
	<button onclick = "showPicture()">Show the fruit</button><br>
	</div>
	<form action="message2.php" method="POST" id="sell-form">
		<div>
			<label for="fruits">Select Fruits:</label>
			<select id="fruits" name="fruits">
					<?php
					// Connect to the database
					include 'connectDB.php';
					// Query to select the fruit names from the inventory table
					$sql = "SELECT fruit, cost FROM inventory";
					// Execute the query
					$result = $conn->query($sql);
					// Check if any rows are returned
					if ($result->num_rows > 0) {
						// Loop through the rows and display the fruit names as options
						while ($row = $result->fetch_assoc()) {
							$fruit = $row["fruit"];
							$cost = $row["cost"];
							echo "<option value='$fruit'>$fruit: $cost per kg</option>";
						}
					}
					// Close the database connection
					$conn->close();
					?>
				</select>
		</div>
		<p id="picture"></p>
		<div class="box3">
			<label for="amount">Amount (kg):</label>
			<input required="required" type="number" id="amount" name="amount" max="100"><br><br>
			<input class="box4" type="submit" id="sell-btn" value="Sell">
		</div>
	</div>
	</form>
	<script>
		function showPicture(){
			 document.getElementById('picture').innerHTML = ""; // clear previous image
		    var name = document.getElementById('fruits').value;
		    if(name == "apple"){
		        document.getElementById('picture').innerHTML = "<img src='apple.jpg' alt='Apple' width='350' height='200'>";
		    }
		    else if(name == "banana"){
		        document.getElementById('picture').innerHTML = "<img src='banana.jpg' alt='Banana' width='285' height='205'>";
		    }
		    else if(name == "orange"){
		        document.getElementById('picture').innerHTML = "<img src='orange.jpg' alt='Orange' width='310' height='260'>";
		    }
		    else if(name == "cherry"){
		        document.getElementById('picture').innerHTML = "<img src='cherry.jpg' alt='cherry' width='320' height='320'>";
		    }
		    else if(name == "grape"){
		        document.getElementById('picture').innerHTML = "<img src='grape.jpg' alt='grape' width='315' height='300'>";
		    }
		}
	</script>
</body>
</html>