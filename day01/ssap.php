#!/usr/bin/php
<?php
    array_shift($argv);
    $s = implode(" ", $argv);
    $str = array_map('trim',array_filter(explode(' ',$s)));
    sort($str);
    for($i = 0; $i < count($str);$i++)
        printf("%s\n", $str[$i]);
    print_r($str);
?>