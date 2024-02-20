<?php
$datamahasiswa = [
    "nama" => "supriyatna",
    "alamat" => "parung",
    "prodi" => "Teknik Informatika",
    "semester" => 2,
    "sudahlulus" => false,
];

echo $datamahasiswa["nama"] . "<br>";
echo $datamahasiswa["alamat"] . "<br>";
echo $datamahasiswa["prodi"] . "<br>";
echo $datamahasiswa["semester"] . "<br>";
echo $datamahasiswa["sudahlulus"] . "<br>";
echo "<br>";
foreach ($datamahasiswa as $mahasiswa)
?>