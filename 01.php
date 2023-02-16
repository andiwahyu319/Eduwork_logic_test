<?php
    function faktorial($angka) {
        $a = 1;
        $faktorial = 1;
        while ($a <= $angka) {
            $faktorial *= $a;
            $a++;
        }
        return $faktorial;
    }

    echo "4! = " . faktorial(4);
    echo "<br>";
    echo "8! = " . faktorial(8); 
?>