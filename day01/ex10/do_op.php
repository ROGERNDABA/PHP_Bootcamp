#!/usr/bin/php
<?php
    array_shift($argv);
    if ($argc != 4)
        echo "Incorrect Parameters\n";
    else
    {
        switch($argv[1])
        {
            case("+"): echo (int)trim($argv[0], " ") + (int)trim($argv[2], " ")."\n";break;
            case("-"): echo (int)trim($argv[0], " ") - (int)trim($argv[2], " ")."\n";break;
            case("*"): echo (int)trim($argv[0], " ") * (int)trim($argv[2], " ")."\n";break;
            case("/"): echo (int)trim($argv[0], " ") / (int)trim($argv[2], " ")."\n";break;
            case("%"): echo (int)trim($argv[0], " ") % (int)trim($argv[2], " ")."\n";break;
            default: break;
        }
    }
?>