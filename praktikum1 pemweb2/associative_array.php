<?php
$profileArray = [
   [
        "nama" => "Ayesha salsabila", //string
        "kelas" => "TI06", //string
        "ipk" => 4, //integer
        "sudah_lulus" => false, //boolean, true dan false
        "hobi" => "menonton drakor"
    ], [ 
        "nama" => "Ayesha salsabila", //string
        "kelas" => "TI06", //string
        "ipk" => 4, //integer
        "sudah_lulus" => false, //boolean, true dan false
        "hobi" => "menonton drakor"
    ]
];

foreach ($profileArray as $profile) {
    echo $profile['nama'];
}