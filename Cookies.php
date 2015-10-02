<?php
define( "FOUR_DAYS", 60 * 60 * 24 * 4 );

setcookie( "username", $_POST["name"], time() + FOUR_DAYS );
setcookie( "firstname", $_POST["height"], time() + FOUR_DAYS );
setcookie( "lastname", $_POST["color"], time() + FOUR_DAYS );
extract($_POST);
?>

<!DOCTYPE html>

<html>
<head>
    <meta charset = "utf-8">
    <title>Cookie Saved</title>
</head>
<body>
<p>The cookie has been set with the following data:</p>

<p>Name: <?php print( $name ) ?></p>
<p>Height: <?php print( $height ) ?></p>
<p>Favorite Color:
         <span style = "color: <?php print( "$color" ) ?> ">
         <?php print( "$color" ) ?></span></p>
<p>Click <a href = "Cookiesr.php">here</a>
    to read the saved cookie.</p>
</body>
</html>
