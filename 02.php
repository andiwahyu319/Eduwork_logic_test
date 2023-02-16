<?php
    function balik($x) {
        $n = strlen($x);
        for ($i = 0; $i<=floor(($n-1)/2); $i++) {
            $temp = $x[$i];
            $x[$i] = $x[$n-1-$i];
            $x[$n-1-$i] = $temp;
        }
        return $x;
    }
    echo balik("abcde");
?>