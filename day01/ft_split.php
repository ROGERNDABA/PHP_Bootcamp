<?php
    function ft_split($string)
    {
        $split_string;
        $i = 0;
        $tok = strtok($string, "\t \v\f\r");
        while ($tok != false)
        {
            $split_string[$i++] = $tok;
            $tok = strtok("\t \f\v\r");
        }
        sort($split_string);
        return ($split_string);
    }
?>