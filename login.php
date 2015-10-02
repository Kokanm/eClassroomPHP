<?php
    include "Connection.php";
    define( "ONE_YEAR", 60 * 60 * 24 * 365 );

    $username = $_POST["username"];
    $password = $_POST["pass"];

    $user = mysql_query("SELECT * from User WHERE username='$username' AND password = '$password'", $db);

    if(mysql_num_rows($user)){
        if (isset($_POST['rememberme'])) {
            setcookie( 'username', $_POST['username'], time() + ONE_YEAR);
        }else{
            setcookie('username', $_POST['username'], false);
        }
    }else{
        print("INVALID USERNAME OR PASSWORD");
    }
    header('Location: index.php');
?>