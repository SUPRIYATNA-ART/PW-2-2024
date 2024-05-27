<?php

$grade = "A";

$keterangan = "";

switch ($grade) {
    case "A":
        $keterangan = "Sangat memuaskan";
        break;
    case "B":
        $keterangan = "Memuaskan";
        break;
    case "C":
        $keterangan = "Kurang memuaskan";
    case "D":
        $keterangan = "Tidak memuaskan";
        break;
    default:
        $keterangan = "Tidak lulus";
        break;
}

echo $keterangan;