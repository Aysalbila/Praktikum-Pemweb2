<?php
$arrayBuah = ["semangka", "kelengkeng", "pisang", "apel"];

sort($arrayBuah);  //mengurutkan array

array_pop($arrayBuah); //menghapus nilai array yang terakhir (setelah diurutkan)\

unset($arrayBuah[2]); //menghapus array secara keseluruhan | [1/2/3]buat ngapus salah satu

array_push($arrayBuah, "apel"); //menambah value array di belakang

array_shift($arrayBuah); //untuk mengapus value array yang paling depan

array_unshift($arrayBuah, "pisang"); //menambah value array didepan

foreach($arrayBuah as $buah){
    echo $buah . "<br>";
}