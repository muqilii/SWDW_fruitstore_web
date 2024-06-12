<?php
$servername = "wsdb.bcrab.cn"; 
$username 	= "jpair18";  
$password 	= "vIQh0slQ";	 
$db		    = "jpair18";	  

$conn = new mysqli($servername, $username, $password, $db);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>