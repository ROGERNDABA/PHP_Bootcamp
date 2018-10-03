#!/usr/bin/php
<?php
    array_shift($argv);
    $str = array_map('trim',array_filter(explode(' ', $argv[0])));
    if ($str)
        echo implode(" ", $str)."\n";
?>