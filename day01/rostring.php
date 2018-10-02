#!/usr/bin/php
<?php
    array_shift($argv);
    $array = array_values(array_map('trim',array_filter(explode(' ',$argv[0]))));
    array_push($array, $array[0]);
    array_shift($array);
    $array = implode(" ", $array);
    printf("%s\n", $array);
?>