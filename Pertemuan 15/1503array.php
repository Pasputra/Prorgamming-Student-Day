<?php
echo "<h2>Array 2 Dimensi</h2>";
$nama=[
    ["Joko", "Jurnalistik", "Laki-laki", 16],
    ["Hamidah", "Programming", "Perempuan", 17],
    ["Ayu", "Seketaris", "Perempuan", 16],
];
var_dump($nama);
echo "<br>";
echo $nama [1][1];

echo "<h2>Array 2 Dimensi - Array Assosiatif</h2>";
$nilai=[
    "Jessica"=>[
        "Matematika" => 80,
        "PKN" => 90,
        "Matematika" => 85,
    ],
    "Jamia"=>[
        "Matematika" => 90,
        "PKN" => 80,
        "Matematika" => 75,
    ],    
    "Hazami"=>[
        "Matematika" => 90,
        "PKN" => 90,
        "Matematika" => 85,
    ],
];
var_dump($nilai);
echo "<br>";
echo $nilai["Jamia"]["PKN"];
echo "<br>";
echo "<pre>" . var_export($nilai, true). "<pre>";