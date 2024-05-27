<?php
$nilai = 90;

$keterangan = "";

if($nilai > 90){
    $keterangan = "sangat Baik";
}  elseif($nilai > 70 || $nilai <= 90) {
    $keterangan = "Lumayan baik";
} else {
    $keterangan = "Oke dah";
}

echo $keterangan;
