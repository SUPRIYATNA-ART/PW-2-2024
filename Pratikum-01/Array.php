<?php
$hewan =["kucing", "kuda", "kelinci", "kangguru", "koala", "ikan"];
echo $hewan[0] . "<br>";
echo $hewan[5] . "<br>";

foreach ($hewan as $key => $value) {
    echo $value . "<br>";
}
$hewan[2] = "kucing";
echo $hewan[2];
?>