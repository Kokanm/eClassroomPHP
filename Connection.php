<?php
    $db = mysql_pconnect("mysql.lrk.si", "km8390", "km8390")
        or die("Could not connect to database");

    mysql_select_db("km8390_b1", $db)
        or die("Could not open products database");

    #mysql_query("DELETE FROM User", $db);

?>

