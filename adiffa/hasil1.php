<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$temlah=$_POST['temlah'];
$tanglah=$_POST['tanglah'];
$kelamin=$_POST['kelamin'];
$pendidikan=$_POST['pendidikan'];
?>
<table border=1>
<tr><td>Nama</td><td><?php echo $nama?></td></tr>
<tr><td>Alamat</td><td><?php echo $alamat?></td></tr>
<tr><td>Tempat lahir </td><td><?php echo $temlah?></td></tr>
<tr><td>Tanggal Lahir</td><td><?php echo $tanglah?></td></tr>
<tr><td>Jenis Kelamin</td><td><?php echo $kelamin?></td></tr>
<tr><td>pendidikan</td><td><?php echo $pendidikan?></td></tr>
</table>
<a href='tugas registrasi.php'>input lagi</a>
</body>
</html>