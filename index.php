<?php 

    $phi = 3.14;

    function luasPersegiPanjang($angka) {

        $panjang = $angka / 3;
        $lebar = $angka / 5;

        $luas = $panjang * $lebar;

        return $luas;
    }

    function luasLingkaran($angka) {

        global $phi;

        $jari_jari = $angka / 3;

        $luas = $phi * $jari_jari * $jari_jari;

        return $luas;
    }

    function kelilingLingkaran($angka) {

        global $phi;

        $jari_jari = $angka / 5;

        $keliling = 2 * $phi * $jari_jari;

        return $keliling;
    }

    for($i = 1; $i <= 100; $i++) {

        if ($i % 3 == 0 && $i % 5 == 0) {

            echo round(luasPersegiPanjang($i), 2) . "<br>";
        }
        else if($i % 3 == 0) {

            echo round(luasLingkaran($i), 2) . "<br>";
        }
        else if($i % 5 == 0) {

            echo round(kelilingLingkaran($i), 2) . "<br>";
        }
        else {

            echo $i . "<br>";
        }
    }

?>