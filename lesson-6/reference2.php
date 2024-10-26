<?php
// pass by reference
function increment(int &$angka)
{
    $angka++;
}

$counter = 1;
increment($counter);

echo $counter;
