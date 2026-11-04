<?php 
$product =[
           ["tas", 50.000, 100, 20],
           ["baju", 100.000, 600, 90],
           ["mobil", 1000.000, 500, 40],
           ["gantungan kunci", 10.000, 700, 20],
           ["buku", 15.000, 50, 80]
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
        <?php for($x = 0; $x < 5; $x++) : ?>
        <tr>
            <td>1</td>
            <td><?=$product[$x][0];?></td>
            <td><?=$product[$x][1];?></td>
            <td><?=$product[$x][2];?></td>
            <td><?=$product[$x][3]; ?></td>
        </tr>
        <?php endfor; ?>
    </table>
</body>
</html>