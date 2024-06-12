<?php

include "connectDB.php";  

$user	= $_POST["usr"];
$pwd	= $_POST["pwd"];
$type = $_POST["type"];
   
   $sql1 = "SELECT * FROM fruitUser WHERE username='$user' AND password='$pwd'";
   $sql2 = "SELECT * FROM fruitUser WHERE username='$user' AND usertype='$type'";
   $result1 = mysqli_query($conn, $sql1);
   $result2 = mysqli_query($conn, $sql2);

    if(mysqli_num_rows($result1)>0){
      if(mysqli_num_rows($result2)>0){
        if($type == "seller"){
          echo "Welcome, $user.<br><hr><br> Go to <a href='Seller.php'> Seller Page </a>";
        }else{
          echo "Welcome, $user.<br><hr><br> Go to <a href='Buyer.php'> Buyer Page </a>";
        }
      }else{
        if($type == "seller"){
          echo "You have not registed Seller account.<br><hr><br>Please go to <a href='registration.php'> Registration Page </a>";
        }else{
          echo "You have not registed Buyer account.<br><hr><br>Please go to <a href='registration.php'> Registration Page </a>";
        }
      }
    }else{
      echo "Opps! Your username $user or password <b>$pwd</b> is incorrect!<br><hr><br> Go back to <a href='Admin_Login_Page.php'> Admin Login Page </a>";
      echo "<br>OR<br><br><hr><br>Pleasse go to <a href='registration.php'> Registration Page </a>";
    }
?>