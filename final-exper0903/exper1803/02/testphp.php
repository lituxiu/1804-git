<?php
$n = 0;
$start = 1;
$end = 50000;
for($num = $start; $num <= $end; $num++) {
    if ( $num == 1 ) continue;
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) continue 2;
    }
    $n++;
}
print_R($n."\n");
