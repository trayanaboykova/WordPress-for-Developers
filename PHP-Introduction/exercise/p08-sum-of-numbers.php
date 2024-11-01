<?php
$N = 1;  
$M = 5;  

if ($N > $M) {
    $temp = $N;
    $N = $M;
    $M = $temp;
}

$sum = 0;
for ($i = $N; $i <= $M; $i++) {
    $sum += $i;
}

echo "The sum of numbers from " . $N . " to " . $M . " is: " . $sum;
?>
