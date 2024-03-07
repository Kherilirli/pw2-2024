<?php

    function tambah($nilai1, $nilai2){
        echo $nilai1 + $nilai2;
    }
    
    tambah(1,2);
    echo"<br>";

    function hitungUmr($tahun_lahir, $tahun_sekarang = 2024){

        echo $tahun_sekarang - $tahun_lahir;
    }

    hitungUmr(2005);