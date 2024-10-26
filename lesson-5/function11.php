<?php
// multiple return
function getPeringkat(int $nilai)
{
    switch ($nilai) {
        case $nilai >= 80:
            return "A";
            break;
        case $nilai >= 70:
            return "B";
            break;
        case $nilai >= 60:
            return "C";
            break;

        default:
            return "D";
            break;
    }
}

echo getPeringkat(85);