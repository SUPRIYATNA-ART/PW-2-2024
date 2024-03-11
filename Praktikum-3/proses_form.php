<?php

$nim = $_POST['nim'];
$Nama = $_POST['Nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$Prodi = $_POST['Prodi'];
$keahlian = $_POST['keahlian'];
$domisili = $_POST['domisili'];
$email= $_POST['email'];
?>

<h1>Terimakasih Sudah Mendaftar di IT Club Data Scienci</h1>
<h5>Nama Lengkap : <?php echo $Nama ?></h5>
<h5>NIM : <?php echo $nim ?></h5>
<h5>Jenis kelamin : <?php echo $jenis_kelamin ?></h5>
<h5>Prodi : <?php echo $Prodi ?></h5>
<h5>Domisili : <?php echo $domisili ?></h5>
<h5>Email : <?php echo $email ?></h5>
<h5>Keahlian : <?php echo $keahlian ?></h5>
