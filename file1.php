<?php

echo 'Hallo World!';
echo '<br>';
//Pemanggilan PHP

//belajar variabel
$namaSiswa = "Nandi";
$umur = 21;
$berat_badan = "61.2";
$_pekerjaan = "Mahasiswa";
$tes = "coba";
echo 'coba';
echo '<hr>';
echo 'Nama Siswa : ' .$namaSiswa;
echo '<br>  Umur : ' .$umur;
echo '<br>  Berat Badan : ' .$berat_badan;
echo '<br>  Pekerjaan : ' .$_pekerjaan;
?>

<!--- Ini Pemanggilan -->
<hr>
Nama Siswa : <?= $namaSiswa?>
<br> Umur : <?= $umur?>
<br> Berat Badan : <?= $berat_badan?>
<br> Pekerjaan : <?= $_pekerjaan?>