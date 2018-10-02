#!/usr/bin/php
<?php
    array_shift($argv);
    for ($i = 0; $i < $argc - 1; $i++)
        printf("%s\n", $argv[$i]);
?>