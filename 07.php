<?php 
    $data = [1, 4, 7, 9, 12];
    $low   = 2;
    $high  = 15;
    
    $result = [];
    foreach ($data as $key => $value) {
        if ($value >= $low && $value <= $high) {
            array_push($result, $value);
        }
    }
    echo count($result);
?>