<?php
    include "Connection.php";

    $username = $_POST["username"];
    $password = $_POST["pass3"];
    $password2 = $_POST["pass"];

    $user = mysql_query("SELECT * from User WHERE username='$username' AND password = '$password'", $db);

    if(mysql_num_rows($user)){
        mysql_query("UPDATE User SET password='$password2' WHERE username='$username'", $db);
        echo "You've changed the password successfully!";
    }else{
        print("INVALID USERNAME OR PASSWORD");
    }
    header('Location: index.php');
?>