<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="hasilcoba.php" method='post'>
<h2>Add Product</h2>
<pre>
Isi Data Dibawah Ini:
Tipe Product        :<select name= 'Tipeproduct'>
    <option value=  'pilih-'>
    <option value=  'Minuman'>Minuman
    <option value=  'Makanan'>Makanan
    <option value=  'Snack'>Snack
</select>
Product             :<input type= 'text'  name='product'>
Cust Code           :<input type= 'number'  name='custcode'>
Quantity            :<input type= 'number'  name='quantity'>
Unit                :<select name= 'Unit'>
<option value=      'pilih-'>
<option value=      'Teh Botol'>Teh Botol
<option value=      'Chuba'>Chuba
<option value=      'Tanggo'>Tanggo
<option value=      'Marimas'>Marimas
</select>
Price               : <input type= 'number' name='Price'>
<input type='submit' value='submit'> <input type='reset' value='cancel'>
</form>
</body>
</html>