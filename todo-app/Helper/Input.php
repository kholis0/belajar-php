<?php

/**
 * 
 * helper untuk input user
 */

function input(string $info)
{
    echo "$info : ";
    $result = trim(fgets(STDIN));
    return $result;
}
