#!/usr/bin/php
<?php

    array_shift($argv);
    $r = array("janvier" => 0, "février" => 1,"mars" => 2, "avril" => 3,"mai" => 4, "juin" => 5,
                "juillet" => 6, "août" => 7,"septembre" => 8, "octobre" => 9,"novembre" => 10, "décembre" => 11);
    $q = array("lundi" => 0 , "mardi" => 2 , "mercredi" => 2, "jeudi" => 3 , "vendredi" => 4 , "samedi" => 5, "dimanche" => 6);
    $s = array_map('trim',array_filter(explode(' ', $argv[0])));
    if (count($s) != 5)
        echo "Wrong Formart\n";
    else
    {
        $s[0] = strtolower($s[0]);
        $s[2] = strtolower($s[2]);
        if ((strlen($s[1]) != 2 || strlen($s[3]) != 4 || strlen($s[4]) != 8 || !is_numeric($s[1])) ||
            (!preg_match("/^([0-1][0-9]|2[0-3]):([0-5][0-9]):([0-5][0-9])$/", $s[4], $e)) ||
            !(array_key_exists($s[0], $q) && array_key_exists($s[2], $r)))
            echo "Wrong Formart\n";
        else
        {
            array_shift($e);
            echo ($s[3] - 1970)."\n";  
            $x = (($s[3] - 1970) * 31536000) + (($r[$s[2]] - 1) * 2592000) + $s[1] * 86400 + $e[0] * 3600 + $e[1] * 60 + $e[2];
            echo $x."\n".$r[$s[2]]."\n";
            print_r($e);
        }
    }
?>