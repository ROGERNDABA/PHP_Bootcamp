#!/usr/bin/php
<?php
    array_shift($argv);
    $array = [];
    $str2 = array_map('trim',array_filter(explode(' ',implode(" ", $argv))));
    natcasesort($str2);
    print_r($str2);
    $str2 = array_values($str2);
    for ($i = 0;$i < count($str2);$i++)
        if (ctype_alpha($str2[$i][0]))
            array_push($array, $str2[$i]);
    sort($str2, SORT_STRING);
    for ($i = 0;$i < count($str2);$i++)
        if (ctype_digit($str2[$i][0]))
            array_push($array, $str2[$i]);
    for ($i = 0;$i < count($str2);$i++)
        if (!ctype_alpha($str2[$i][0]) && !ctype_digit($str2[$i][0]))
            array_push($array, $str2[$i]);
    $array = implode("\n", $array);
    printf("%s\n", $array);
?>