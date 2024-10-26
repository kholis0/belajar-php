<?php
// continue | skip perulangan saat ini
for ($counter = 0; $counter <= 10; $counter++) {
    if ($counter % 2 == 0) {
        continue;
    }
    echo "Hello continue $counter \n";
}
