<?php
    for ($i = 1; $i < 10; $i++){
        echo "<h1>$i</h1>";
    }

    //array
    $buah = ['Mangga', 'Jeruk', 'Semangka'];
    //pemanggil array
    foreach ($buah as $b){
        echo "<h1>{$b}</h1>";
    }