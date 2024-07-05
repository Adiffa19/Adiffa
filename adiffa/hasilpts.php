<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output</title>
</head>
<body>
<?php
$nim=$_POST['nim'];
$nama=$_POST['nama'];
$kelamin=$_POST['kelamin'];
$temlah=$_POST['tanglah'];
$tanglah=$_POST['tanglah'];
$kelamin=$_POST['kelamin'];
$jurusan=$_POST['jurusan'];
?>
<table border=1>
<tr><td>Nim</td><td><?php echo $nim?></td></tr>
<tr><td>Nama</td><td><?php echo $nama?></td></tr>
<tr><td>Alamat</td><td><?php echo $alamat?></td></tr>
<tr><td>Tempat lahir </td><td><?php echo $temlah?></td></tr>
<tr><td>Tanggal Lahir</td><td><?php echo $tanglah?></td></tr>
<tr><td>Jenis Kelamin</td><td><?php echo $kelamin?></td></tr>
<tr><td>jurusan</td><td><?php echo $jurusan1?></td></tr>
<tr><td>jurusan</td><td><?php echo $jurusan2?></td></tr>
</table>
<a href='tugas registrasi.php'>input lagi</a>
</body>
</html>