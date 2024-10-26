<?php
$h = date("N");
switch ($h) {
    case 1:
        echo "Senin";
        break;
    case 2:
        echo "Selasa";
        break;
    case 3:
        echo "Rabu";
        break;
    case 4:
        echo "kamis";
        break;
    case 5:
        echo "Jum'at";
        break;
    case 6:
        echo "Sabtu";
        break;
    case 7:
        echo "Ahad";
        break;
    
    default:
        echo "Hari tidak di ketahui";
        break;
}