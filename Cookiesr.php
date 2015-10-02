<!DOCTYPE html>

<html>
<head>
    <meta charset = "utf-8">
    <title>Read Cookies</title>
</head>
<body>
<?php
    foreach ($_COOKIE as $key => $value ) {
        print("<p>$key: $value</p>");
        setcookie($key, '', time() - 60 * 60 * 24 * 365);
    }
?>
</body>
</html>
