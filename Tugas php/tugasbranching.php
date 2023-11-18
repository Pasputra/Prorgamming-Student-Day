
<?php

#4 variabel

function penghitung_bobot($nilai)

{
    if ($nilai >= 81 AND $nilai <= 100)  {
    echo "Nilai Anda $nilai, nilai Anda A, dan Bobot anda 4";
    } elseif ($nilai >= 78 AND $nilai < 81) {
    echo "Nilai Anda $nilai, nilai Anda A-, dan Bobot anda 3,7";
    } elseif ($nilai >= 75 AND $nilai < 78) {
    echo "Nilai Anda $nilai, nilai Anda B+, dan Bobot anda 3,3";     
    }elseif ($nilai >= 70 and $nilai < 75) {
        echo "nilai anda $nilai, nilai anda B, dan Bobot anda 3";
    }elseif ($nilai >= 65 and $nilai < 70) {
        echo "nilai anda $nilai, nilai anda B-, dan Bobot anda 2,7";
    }elseif ($nilai >= 60 and $nilai < 65) {
        echo "nilai anda $nilai, nilai anda C+, dan Bobot anda 2,3";
    }elseif ($nilai >= 55 and $nilai < 60) {
        echo "nilai anda $nilai, nilai anda C, dan Bobot anda 2";
    }elseif ($nilai >= 40 and $nilai < 55) {
        echo "nilai anda $nilai, nilai anda D, dan Bobot anda 1";
    }elseif ($nilai >= 0 and $nilai < 40) {
    echo "nilai anda $nilai, nilai anda E, dan Bobot anda 0";
    } else {
        echo "nilai anda $nilai, tidak ada penilaian seperti ini";
    }
}

echo "1. Rafi ";
penghitung_bobot(89);
echo "<br>";
echo "2. Syah ";
penghitung_bobot(83);
echo "<br>";
echo "3. Farel ";
penghitung_bobot(74);
echo "<br>";
echo "4. Jendra ";
penghitung_bobot(59);
echo "<br>";
echo "5. Hazami ";
penghitung_bobot(49);
echo "<br>";
?>