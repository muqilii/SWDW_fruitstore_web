<html>
<style>
	.box1{
		text-align: center;
		width: 200px;
		height: 200px;
	}
	.box2{
		color: lightgray; 
		border: none; 
		border-bottom: solid 1px;
	}
	.box3{
		background: linear-gradient(to right, #0099ff 5%, #669999 100%);
		color: white;
		width: 150px;
		height: 25px;
		border-style: outset;
	}
	</style>
	<body>
		<div class="box1">
	<h2 style="font-family: Times, Serif;">Login</h2><br>
	<form action="message1.php" method="POST">
		<input required="required" type="text" id="usr" name="usr" value="Username" class="box2" required="required"><br><br>
		<input required="required" type="password" id="pwd" name="pwd" value="Userpassword" class="box2" required="required"><br><br>
		<label for="type">User type:</label>
			<select id="type" name="type">
				<option value="buyer">Buyer</option>
				<option value="seller">Seller</option>
			</select><br><br>
		<input type="submit" class="box3" value="Login"><br><br>
	</form>
</div>
</body>
</html>