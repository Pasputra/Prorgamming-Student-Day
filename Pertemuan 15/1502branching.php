<?php   
# if 1 variabel
$hari = "Hujan";
if ($hari == "Hujan") {
    echo "saya bawa payung";
}
echo "<hr>";

## if dengan 2 variabel
if ($hari == "Hujan")  {
    echo "saya bawa payung";
} else {
    echo "saya tidak bawa payung";
}
echo "<hr>";

/*
buat if dengan 2 variabel yang mengatakan anda lulus atau tidak lulus jika nilai yang didapat adalah >=75
*/

$nilai = 85;
if ($nilai >= 75)  {
    echo "Nilai Anda  $nilai, Anda <b>Lulus</b>" ;
} else {
    echo "Nilai Anda $nilai, Anda <b>Tidak Lulus</b>";
}
echo "<hr>";

$nilai = 100;
if ($nilai >= 75 AND $niali <=100) {
    echo "Nilai Anda $nilai, Anda <b>Lulus</b>";
} elseif ($nilai >= 0 && $nilai < 75) {
    echo "Nilai anda $nilai, Anda <b>tidak lulus</b>";
} else {
    echo "Niali anda $nilai, mana ada lo nilai macam begini a";
}

echo "<hr>";
if ($niali >= 91 AND $nilai <= 100) {
echo "Nila Anda $niali, Nilai anda A"; (
elseif($nilai >= 83 AND $nilai <91 );
echo "Nilai anda $nilai, nilai anda B";
elseif ($nilai >= 75 AND $nilai <83);
echo "Nilai anda $nilai, Nilai anda C";
elseif ($nilai >= 0 AND $nilai <75 );
echo "Nilai anda $niali, Nilai anda D";
else :
}

$hasil = "A";
switch ($hasil) {
    case 'A':
        echo "Nilai anda $hasil, anda istimewa";
        break;
    case 'B':
        echo "Nilai anda $hasil, anda baik";
        break;
    case 'C':
        echo "Nilai anda $hasil, anda cukup";
        break;
    case 'D':
        echo "Nilai anda $hasil, anda kurang";
        break;
    default:
        echo "Tidak ada ketentuan seperti ini";
        break;
}