<?php
    include "Connection.php";
    $result = mysql_query("SELECT * from User", $db)
    or die(mysql_error());
    $arr = array();
    $sor = $_GET['sor'];

    $i = 0;
    while ( $row = mysql_fetch_row( $result ) )
    {
        $arr[$i] = array("firstname"=>$row[2], "lastname"=>$row[3], "city"=>$row[6],
            "country"=>$row[7], "birthday"=>$row[9]);
        $i++;
    }

    if($sor=="fn") {
        function cmp1($a, $b)
        {
            $ret = strnatcmp($a['firstname'], $b['firstname']);
            return $ret;
        }

        usort($arr, "cmp1");
    }else if($sor=="ln"){
        function cmp2($a, $b)
        {
            $ret = strnatcmp($a['lastname'], $b['lastname']);
            return $ret;
        }

        usort($arr, "cmp2");
    }else if($sor=="cit"){
        function cmp3($a, $b)
        {
            $ret = strnatcmp($a['city'], $b['city']);
            return $ret;
        }

        usort($arr, "cmp3");
    }else if($sor=="coun"){
        function cmp4($a, $b)
        {
            $ret = strnatcmp($a['country'], $b['country']);
            return $ret;
        }

        usort($arr, "cmp4");
    }


    print('{"students" : [');
    $l1 = sizeof($arr);
    foreach ($arr as $key => $value){
        $l2 = sizeof($value);
        print('{');
        foreach($value as $key2 => $value2) {
            print('"');
            print("$key2");
            print('"');
            print(':');
            print('"');
            print("$value2");
            print('"');
            $l2--;
            if($l2>0){
                print(',');
            }
        }
        $l1--;
        print('}');
        if($l1>0){
            print(',');
        }
    }
    print(']}');

        /*print("<tbody id='tabla'>");
        foreach ($arr as $key => $value){
            print("<tr>");
            foreach($value as $key2 => $value2)
                print("<td>$value2</td>");
            print("</tr>");
        }
        print("</tbody>");*/
?>