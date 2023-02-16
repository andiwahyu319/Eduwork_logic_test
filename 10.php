<?php
    function kabisat($tahun){
        if ($tahun % 4 == 0) {
            echo "$tahun adalah tahun kabisat <br>";
        } else {
            echo "$tahun bukan tahun kabisat <br>";
        }
    }

    kabisat(2021);
    kabisat(2024);
?>