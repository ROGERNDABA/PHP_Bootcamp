#!/usr/bin/php
<?php
    echo "Enter a number: ";
    while (fscanf(STDIN, "%s", $x) != false)
    {
        if(is_numeric($x) && $x % 2 == 0)
        echo ("The number " . $x . " is even\n");
        else if (is_numeric($x) && $x % 2 != 0)
        echo ("The number " . $x . " is odd\n");
        else
        echo "'" .$x . "' is not a number\n";
        echo "Enter a number: ";
    }
    echo "\n";
?>