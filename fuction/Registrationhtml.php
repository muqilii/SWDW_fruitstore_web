<!DOCTYPE html>
<html>
<head>
<!DOCTYPE html>
<html>
<head>
<style> 
input[type=text] {
  width: 40%;
  padding: 12px 20px;
  box-sizing: border-box;
  border: none;
  border-bottom: 1px solid black;
}
input[type=text]:focus {
  background-color: #EAF1FE;
  border: 3px solid #F8F8FF;
}
#button{
  width: 40%;
  background-color: #4CAF50;
  background-image: linear-gradient(to right, #1A75AC , #1A9D8F);
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}
.posters {
  color:black;
  font-family:Times New Roman;
  font-size:80%;
}
#head{
  font-family:Times New Roman;
}
</style>
</head>
<body style="text-align:center;">
<h2 id=head>Registration</h2><br><br>

<form action="registration.php" method="Post">
  <input type="text" id="username" name="username" placeholder="username" required /><br><br>
  <input type="text" id="password" name="password" placeholder="password"required /><br><br>
  <input type="radio" id="usertype" name="usertype" value="seller">seller
  <input type="radio" id="usertype" name="usertype" value="buyer">buyer
  <br><br><br>
  <input id="button" type="submit" value="Registration">
  <br><br><br>
</form>
</body>
</html>