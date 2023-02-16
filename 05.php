<?php
    function terbilang($nilai) {
        $nilai = abs($nilai);
        $huruf = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
        $temp  = "";
        if ($nilai < 0 or $nilai > 100) {
            echo "silahkan masukkan bilangan 1-100";
        } else if ($nilai < 12) {
            $temp = " " . $huruf[$nilai];
        } else if ($nilai < 20) {
            $temp = terbilang($nilai - 10) . " belas";
        } else if ($nilai < 100) {
            $temp = terbilang($nilai / 10) . " puluh" . terbilang($nilai % 10);
        } else {
            echo "seratus";
        }

        return $temp;
    }
    echo "4 = " . terbilang(4) . "<br>";
    echo "20 = " . terbilang(20) . "<br>";
    echo "39 = " . terbilang(39) . "<br>";
    echo "104 = " . terbilang(104) . "<br>";
?>