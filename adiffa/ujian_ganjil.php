<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Form</title>
</head>
<body>
<form action="hasil_ganjil.php" method='post'>
<h2> Tambah Data Rak</h2>
<pre>
Nama Gedung
<select name='gedung'>
    <option value='null'>
    <option value='Ciledug'>Ciledug
    <option value='Slipi'>Slipi
    <option value='BSD'>BSD
</select>

Nama Lantai
<select name='lantai'>
    <option value='null'>
    <option value='1'>Lantai 1 
    <option value='2'>Lantai 2
    <option value='3'>Lantai 3
</select>

Nama Ruang
<select name='ruang'>
    <option value='null'>
    <option value='201'>Ruang 201
    <option value='202'>Ruang 202
    <option value='203'>Ruang 203
</select>

Kode Rak:
<input type='number' name='kode'>

Nama Rak
<input type='text' name='nama'>

Kapasitas Baris:
<textarea rows=”5” cols=”15” name='kapasitas'></textarea>

<input type='submit' value='Simpan'> <input type='reset' value='Tutup'>
</body>
</html>