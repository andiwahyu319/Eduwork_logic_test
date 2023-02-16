<?php
    $data = [4,2,6,88,3,11];

    $low = $data[0];
    $high = $data[0];
    foreach ($data as $key => $value) {
        if ($value < $low) {$low = $value;}
        if ($value > $high) {$high = $value;}
    }
    echo "low=" . $low . ", high=" . $high;
?>