#!/usr/bin/php
<?php

if ($argc > 1)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $argv[1]);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $x = curl_exec($ch);
    preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $x, $matches);
    $i = 0;
    print_r($matches);
    $matches = $matches[1];
    $dir = parse_url($argv[1], PHP_URL_HOST);
    echo $dir;
    if (i)
    mkdir($dir);
    foreach ($matches as $key)
    {
        curl_setopt($ch, CURLOPT_URL, $key);
        $x = curl_exec($ch);

        $ext = explode("/", $key);
        file_put_contents($dir . DIRECTORY_SEPARATOR .end($ext) , $x);
    }
    curl_close($ch);
}
?>
