#!/usr/bin/php
<?php

    if ($argc == 2) {
        array_shift($argv);
        $r = array("janvier" => 1, "février" => 2, "mars" => 3, "avril" => 4, "mai" => 5, "juin" => 6,
            "juillet" => 7, "août" => 8, "septembre" => 9, "octobre" => 10, "novembre" => 11, "décembre" => 12);
        $q = array("lundi" => 1, "mardi" => 2, "mercredi" => 3, "jeudi" => 4, "vendredi" => 5, "samedi" => 6, "dimanche" => 7);
        $s = array_map('trim', array_filter(explode(' ', $argv[0])));
        if (count($s) != 5)
            echo "Wrong Formart\n";
        else {
            $s[0] = strtolower($s[0]);
            $s[2] = strtolower($s[2]);
            if (!preg_match('/^([A-Z]?[a-z]+) ([0-9]{1,2}) ([A-Z]?[a-z]+) ([0-9]{4}) ([0-9]{2}):([0-9]{2}):([0-9]{2})$/', $argv[0]) ||
                (!preg_match("/^([0-1][0-9]|2[0-3]):([0-5][0-9]):([0-5][0-9])$/", $s[4], $e)) ||
                !(array_key_exists($s[0], $q) && array_key_exists($s[2], $r)))
                echo "Wrong Formart\n";
            else {
                date_default_timezone_set('Europe/Paris');
                array_shift($e);
                echo mktime($e[0], $e[1], $e[2], $r[$s[2]], $s[1], $s[3]) . "\n";
            }
        }
    }
?>