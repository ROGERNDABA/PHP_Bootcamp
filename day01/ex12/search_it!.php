#!/usr/bin/php
<?php
    array_shift($argv);
    for ($i = 1; $i < count($argv);$i++)
    {
        $s = array_map('trim',array_filter(explode(':',$argv[$i])));
        if (!strcmp($s[0], $argv[0]))
            $x = $s[1];
    }
    if ($x)
        echo $x."\n";
?>