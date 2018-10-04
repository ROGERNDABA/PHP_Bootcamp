#!/usr/bin/php
<?php
    $array2 = [];
    date_default_timezone_set('Europe/Paris');
    $fd = fopen("/var/run/utmpx", 'r');
    while ($line = fread($fd, 628)) {
        $array = unpack("a256login/a4/a32term/i/i/itime", $line);
        if (trim($array["term"]) && $array["1"] == 7)
            array_push($array2, $array);
    }
    foreach ($array2 as $array)
        echo $array["login"]."   ".$array["term"]."  ".
            date("M  j H:i", $array["time"])."\n";
    fclose($fd);
 ?>