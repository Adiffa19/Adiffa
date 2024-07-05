<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<form action="hasilpts.php" method='post'>
<h2>Form Registrasi</h2>
<pre>
Isi Data Dibawah ini:
Nim                    :<input type= 'number'  name='nim'>
Nama                   :<input type=  'text'   name='nama'>
Jenis Kelamin          :<input type=  'radio'  name='kelamin' value='Laki-laki'>Laki-laki <input type='radio' name='kelamin' value='Perempuan'>Perempuan
Tanggal Lahir          :<input type=  'date'   name='tanglah'>
Tempat Lahir           :<input type=  'text'   name='temlah'>
Jurusan                :<select name= 'jurusan'>
    <option value=  'pilih-'>
    <option value=  'Sistem Informasi'>Sistem Informasi
    <option value=  'Akuntansi'>Akuntansi
</select>
Tahun Masuk           :<select name='tahunmasuk'>
    <option value=  'pilih-'>
    <option value=  '2022'>2022
    <option value=  '2023'>2023
    <option value=  '2024'>2024
    <option value=  '2025'>2025
</select>
</pre>
<input type='submit' value='submit'> <input type='reset' value='cancel'>
</form>   
</body>
</html>


