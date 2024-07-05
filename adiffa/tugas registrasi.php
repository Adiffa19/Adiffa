 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="hasil1.php" method='post'>
<h2>Form Registrasi</h2>
<pre>
Isi Data Dibawah ini:
Nama                :<input type='text' name='nama'>
alamat              :<textarea name='alamat'rows='5' cols='40'></textarea>
Tempat Lahir        :<input type='text' name='temlah'>
Tanggal Lahir       :<input type='date' name='tanglah'>
Jenis Kelamin       :<input type='radio' name='kelamin' value='laki-laki'>laki-laki <input type='radio' name='kelamin' value='perempuan'>Perempuan
pendidikan          :<select name='pendidikan'>
    <option value='pilih-'>
    <option value='Smp'>Smp
    <option value='Sma/Smk'>Sma/Smk
    <option value='D3-'>D3
    <option value='S1'>S1
    <option value='S2'>S2
</select>
<p>
<input type='submit' value='submit'><input type='reset' value='cancel'>
</body>
</body>
</html>