#!/usr/bin/php
<?php
	if ($argc > 1)
	{
    	$array = array_values(array_map('trim',array_filter(explode(' ',$argv[1]))));
    	$x = array_shift($array);
    	array_push($array, $x);
    	if ($array)
	    	echo implode(" ", $array)."\n";
    }
?>