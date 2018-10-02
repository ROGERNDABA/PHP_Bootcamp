#!/usr/bin/php
<?php
    array_shift($argv);
    $array = explode(" ", $argv[0]);
    printf("%s\n", $array[0]);
?>