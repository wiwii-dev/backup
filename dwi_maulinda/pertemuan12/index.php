<?php 
$product =[
           ["name" => "tas", "price" => 50.000, "stock" => 100, "sold" => 20],
           ["name" => "baju", "price" => 100.000, "stock" => 600, "sold" => 90],
           ["name" => "mobil", "price" => 1000.000, "stock" => 500, "sold" => 40],
           ["name" => "gantungan kunci", "price" => 10.000, "stock" => 700, "sold" => 20],
           ["name" => "buku", "price" => 15.000, "stock" => 50, "sold" => 80]
];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Data product</h1>

    <table>
        <tr>
        <th>No</th>
        <th>product</th>
        <th>price</th>
        <th>stock</th>
        <th>sold</th>
        </tr>
        <?php $x =1; foreach($product as $product) : ?>
        <tr>
            <td><?php echo $x++; ?></td>
            <td><?php echo $product["name"]; ?></td>
            <td><?php echo $product["price"]; ?></td>
            <td><?php echo $product["stock"]; ?></td>
            <td><?php echo $product["sold"]; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>