#!/usr/bin/php
<?php
$line = "";
    $fd = fopen("/var/run/utmpx", 'r');
    while ($line = fread($fd, 600))
        $array = unpack("a256user", $line);
    echo $array['type'].'\n';
    print_r($array);
 ?>