<?php
    include "connectDB.php";

    $usr	= $_POST["username"];
    $pwd	= $_POST["password"];
    $typ  = $_POST["usertype"];
    // make sure the user is not empty 
    $sql = "SELECT username,usertype FROM fruitUser WHERE username='$usr' and usertype='$typ'";
    $res = mysqli_query($conn, $sql);
    $row = mysqli_num_rows($res);
    if($row>0){
      echo "The user is already exsited.";
      echo "<br><br> Go to <a href='Registrationhtml.php'> Registration Page </a>";
    }
    else{
      $sql_insert ="INSERT INTO `fruitUser` (`username`,`password`,`usertype`) values ('$usr','$pwd','$typ')";
      $result = mysqli_query($conn, $sql_insert); 
      echo "Go to <a href='Login_Page.php'> login Page </a>";
    }
?>