<?php
    include "Connection.php";

    $username = $_POST["username"];
    $password = $_POST["pass"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $city = $_POST["city"];
    $country = $_POST["country"];

    if(mysql_query("INSERT INTO User(idUser, username, firstname, lastname, password, email, city, country)
        VALUES (NULL, '$username', '$firstname', '$lastname', '$password', '$email', '$city', '$country')", $db)) {
        echo "The user has been created!";
    }else{
        echo "Something went wrong. Check the input again!";
    }
    header('Location: create.html');
?>