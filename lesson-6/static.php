<?php
// static scope

function antrian() {
    static $i = 1;
    echo "antrian ke $i\n";
    $i++;
}

antrian();
antrian();
antrian();