#!/usr/bin/php
<?php
    array_shift($argv);
    $str = array_map('trim',array_filter(explode(' ',implode(" ", $argv))));
    sort($str);
    if ($str)
 	   echo implode("\n", $str)."\n";
?>