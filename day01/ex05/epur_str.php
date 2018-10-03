#!/usr/bin/php
<?php
    array_shift($argv);
    $str = implode(" ", array_map('trim',array_filter(explode(' ',implode(" ", $argv)))));
    if ($str)
    	printf("%s\n", $str);
?>