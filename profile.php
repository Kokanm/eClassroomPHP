<?php
    include "Connection.php";

    $firstname = $_GET["firstname"];
    $lastname = $_GET["lastname"];
    $phone = $_GET["phone"];
    $email = $_GET["email"];
    $city = $_GET["city"];
    $country = $_GET["country"];
    $birthday = $_GET["bday"];
    $bday = date('Y-m-d', strtotime($birthday));

    if(mysql_query("UPDATE User SET telephone='$phone', email='$email', city='$city',
                country='$country', birthday='$bday' WHERE firstname='$firstname' AND lastname='$lastname'", $db)){
        echo "Your profile has been updated!";
    }else{
        echo "Something went wrong. Check the input again!";
    }
    header('Location: editprofile.html');
?>