<?php
// recursive overflow 
function loop(int $value)
{
    if ($value == 0) {
        echo "Selesai\n";
    } else {
        echo "Loop ke - $value\n";
        loop($value - 1);
    }
}

loop(100);
