<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php
$tipe=$_POST['Tipeproduct'];
$product=$_POST['product'];
$custcode=$_POST['custcode'];
$quantity=$_POST['quantity'];
$unit=$_POST['Unit'];
$price=$_POST['Price'];
?> 
<table border=1>
<tr><td>Tipe Product<td><?php echo $tipe?></td></tr>
<tr><td>Product</td><td><?php echo $product?></td></tr>
<tr><td>Customer Code</td><td><?php echo $custcode?></td></tr>
<tr><td>Quantity</td><td><?php echo $quantity?></td></tr>
<tr><td>Unit</td><td><?php echo $unit?></td></tr>
<tr><td>Price</td><td><?php echo $price?></td></tr>
</table>
<a href='coba.php'>input lagi</a>    
</body>
</html>