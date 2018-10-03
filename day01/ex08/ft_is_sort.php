<?php
    function ft_is_sort(&$array)
    {
        for ($i = 0;$i < count($array) - 1;$i++)
        {
            if (strcmp($array[$i], $array[$i + 1]) > 0)
                return (false);
        }
        return (true);
    }
?>