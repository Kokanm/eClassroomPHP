<!DOCTYPE html>

<?php
include "Connection.php";
?>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Course: List of students</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<header>
    <ul>
        <li><a href="index.php"><img src="Hogwartscrest.png" width="50" alt="University image"/></a></li>
        <a href="index.php"><canvas id = "text" width = "200" height = "50"></canvas></a>
        <script>
            var canvas = document.getElementById("text");
            var context = canvas.getContext("2d");

            context.font = "bold 30px sans-serif";
            context.textAlign = "center";
            context.lineWidth = 2;
            context.strokeStyle = "black";
            context.strokeText("E-Classroom", 100, 40);
        </script>
        <li id="login">You are currently using guest access
            (<a href="index.php">log in</a>)</li>
    </ul>
</header>

<section class="page-content">
    <div class="laside">
        <nav>
            <h3>Navigation</h3>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="myprofile.html">My profile</a></li>
                <li id="except"><details>
                        <summary><a href="mycourses.html">My courses</a></summary>
                        <ul id="mycourses">
                            <li><a href="predmet.html">Defence Against the Dark Arts</a></li>
                            <li><a href="predmet.html">Flying</a></li>
                            <li><a href="predmet.html">Potions</a></li>
                        </ul>
                    </details></li>
            </ul>
        </nav>

        <div class="Administration">
            <h3>Administration</h3>
            <ul>
                <li><a href="editprofile.html">Edit profile</a></li>
                <li><a href="change.html">Change password</a></li>
                <li style="border-bottom: 1px solid #BC4A47; padding-bottom: 5px;"><a href="messaging.html">Messaging</a></li>
                <li style="padding-top: 5px;"><p id="ext">Enrol me in this course</p></li>
                <li><a href="ocene.html">Grades</a></li>
            </ul>

        </div>

        <div class="events">
            <h3>Upcoming events</h3>
            <p>No upcoming events</p>
        </div>
    </div>

    <div class="centers">
        <p id="heding" style="padding-bottom: 30px; font-size:20px;">List of students</p>
        <?php
        $result = mysql_query("SELECT * from User", $db)
        or die(mysql_error());
        $arr = array();

        $i = 0;
        while ( $row = mysql_fetch_row( $result ) )
        {
            $arr[$i] = array("id"=>$row[0], "firstname"=>$row[2], "lastname"=>$row[3],
                "password"=>$row[4] ,"city"=>$row[6], "country"=>$row[7], "telephone"=>$row[8], "birthday"=>$row[9]);
            $i++;
        }

        function cmp($a, $b)
        {
            $ret = strnatcmp($a['lastname'], $b['lastname']);
            if(!$ret)
                $ret = strnatcmp($a['firstname'], $b['firstname']);

            return $ret;
        }

        usort($arr, "cmp");

        ?>
        <table border = "1">
            <?php
            foreach ($arr as $key => $value){
                foreach($value as $key2 => $value2)
                    print("[$key2] = $value2 <br />");
                print("<br/>");
            }
            ?>
        </table>
    </div>
</section>
<footer>
    <h6>&copy; 2014-2015 by Hogwarts University of Witchcraft and Wizardry.</h6>
    <address>
        Contact us at dumbledore@hog.uni-lj.si
    </address>
</footer>
</body>
</html>