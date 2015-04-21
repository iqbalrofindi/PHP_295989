<?php
//nama file: terima.php
//menangkap variabel $sama
//mengubah variabel global ke lokal
$nama = $_POST["nama"];
$umur = $_POST["umur"];
$ipk = $_POST["ipk"];
$fakultas = $_POST["fakultas"];
$universitas = $_POST["universitas"];
$nilai1 = $_POST["nilai1"];
$nilai2 = $_POST["nilai2"];
$nilai3 = $nilai1+$nilai2;


//menampilkan isi nama/ nilai variabel $sama
//yang berwarna busam akan tampil ke tampilan
echo " <hr>Nama anda adalah $nama <br>";
echo "<hr>Berumur $umur <br>";
echo "<hr>ipk anda $ipk <br>";
echo "<hr>fakultas anda $fakultas <br>";
echo "<hr>di $universitas <br>";
echo "<hr>nilai total anda adalah $nilai3 <hr>";
?>