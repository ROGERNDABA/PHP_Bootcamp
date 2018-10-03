#!/usr/bin/php
<?php
    $s = [];
    array_shift($argv);
    if ($argc != 2)
        echo "Incorrect Parameters\n";
    else
    {
        $tok = strtok($argv[0], "+*/-%");
        $tok = trim($tok);
        while ($tok != false)
        {
            array_push($s, $tok);
            $tok = strtok("+*/-%");
            $tok = trim($tok);
        }
        print_r($s);
        if (count($s) != 2 || !is_numeric($s[0]) || !is_numeric($s[1]))
            echo "Syntax Error\n";
        else
        {
            if (strchr($argv[0], "+"))
                echo $s[0] + $s[1]."\n";
            else if (strchr($argv[0], "-"))
                echo $s[0] - $s[1]."\n";
            else if (strchr($argv[0], "*"))
                echo $s[0] * $s[1]."\n";
            elseif (strchr($argv[0], "%"))
                echo $s[0] % $s[1]."\n";

        }
    }
?>