#!/usr/bin/php
<?php
    array_shift($argv);
    $r = array("janvier" => 1, "février" => 2,"mars" => 3, "avril" => 4,"mai" => 5, "juin" => 6,
        "juillet" => 7, "août" => 8,"septembre" => 9, "octobre" => 10,"novembre" => 11, "décembre" => 12);
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
            date_default_timezone_set('Europe/Paris');
            echo mktime($e[0], $e[1], $e[1], $r[$s[2]], $s[1], $s[3])."\n";
            array_shift($e);
            print_r($e);
            print_r($s);
        }
    }
?>