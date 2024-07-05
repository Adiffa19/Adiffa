<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<?php
$nim=$_POST['nim'];
$nama=$_POST['nama'];
$kelamin=$_POST['kelamin'];
$tanglah=$_POST['tanglah'];
$temlah=$_POST['temlah'];
$jurusan=$_POST['jurusan'];
$masuk=$_POST['masuk'];
?>
<table border=1>
<tr><td colspan='2'>Data Adiffa</td></tr>
<tr><td>NIM</td><td><?php eco $nim?></td></tr>
<tr><td>Nama</td><td><?php echo $nama?></td></tr>
<tr><td>Jenis Kelamin</td><td><?php echo $kelamin?></td></tr>
<tr><td>Tanggl Lahir</td><td><?php echo $tanglah?></td></tr>
<tr><td>Tempat Lahir</td><td><?php echo $temlah?></td></tr>
<tr><td>Jurusan</td><td><?php echo $jurusan?></td></tr>
<tr><td>Tahun Masuk</td><td><?php echo $masuk?></td></tr>
</table>
<a href='tugas_ganjil.php'>Input Lagi</a>
</body>
</html>