<?php
$my_array = array(15, null, "  ", -2, NULL, "", " \n", "Red", 54, "\t");
print_r($my_array);
$result = array_filter($my_array, create_function('$x','return preg_match("#\S#", $x);'));                 
print_r($result);
