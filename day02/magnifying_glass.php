#!/usr/bin/php
<?php

    function find_match($str) {
        return (str_replace($str[1], strtoupper($str[1]), $str[0]));
    }
    if ($argc != 2)
        echo "Please use one html file\n";
    else if (!file_exists($argv[1]))
        echo "File does not exist\n";
    else
    {
        $file = fopen($argv[1], 'r') or exit("could not open file\n");
        while (!feof($file))
        {
            $line = fgets($file);
            $line = preg_replace_callback('/<a.*?title="(.*?)">/', find_match, $line);
            $line = preg_replace_callback('/<a.*?>(.*?)</', find_match, $line);
            echo $line;
        }
    }
?>