<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Out Form</title>
</head>
<body>
<?php
$lantai=$_POST['lantai'];
$ruang=$_POST['ruang'];
$kode=$_POST['kode'];
$nama=$_POST['nama'];
$kapasitas=$_POST['kapasitas'];
?>
<table border=1>
<tr><td colspan='2' align='center' >Data Adiffa</td></tr>
<tr><td>Nama Lantai</td><td><?php echo $lantai?></td></tr>
<tr><td>Nama Ruang</td><td><?php echo $ruang?></td></tr>
<tr><td>Kode Rak</td><td><?php echo $kode?></td></tr>
<tr><td>Nama Rak</td><td><?php echo $nama?></td></tr>
<tr><td>Kapasitas Baris</td><td><?php echo $kapasitas?></td></tr>
</table>
<a href='ujian_ganjil.php'>Input Lagi</a>

    
</body>
</html>