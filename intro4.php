<?php
$nilai = 80;
$spp = true;
$kkm = 75;
if($nilai >= $kkm && $spp == true) {
    echo "Lulus";
} else {
    echo "Tidak lulus";
}

echo "<br>-----------<br>";

$kelas = "b";
if($kelas == "A") {
    echo "Masuk Ruang 1";
} else if($kelas == "B" || $kelas == "b") {
    echo "Masuk Ruang 2";
} else if($kelas == "C") {
    echo "Masuk Ruang 3";
} else {
    echo "Tidak punya ruang";
}
?>