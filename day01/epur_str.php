#!/usr/bin/php
<?php
    $split_string;
    $tok = strtok($argv[1], "\t \v\f\r");
    while ($tok != false)
    {
        $split_string = $split_string.$tok;
        $tok = strtok("\t \f\v\r");
        $split_string = ($tok != false) ? $split_string." " : $split_string;
    }
    printf("%s\n", $split_string);
?>