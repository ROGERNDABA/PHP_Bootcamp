#!/usr/bin/php
<?php

    include("ft_is_sort.php");
    $tab = array("!/@#;^", "42", "Hello World", "hi", "zZzZzZz");
    $tab1 = array("2", "A", "a", "z");
    $tab[] = "What are we doing now ?";
    if (ft_is_sort($tab1))
        echo "The array is sorted\n";
    else
        echo "The array is not sorted\n";

?>