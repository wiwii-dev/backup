<?php
    var_dump($_GET);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>metode pengiriman data menggunakan get</h1>

    <ul>
        <li>Product : <?php echo $_GET["name"]; ?></li>
        <li>Price : Rp <?php echo $_GET["price"]; ?></li>
         <li>stock : <?php echo $_GET["stock"]; ?></li>
          <li>sold : <?php echo $_GET["sold"]; ?></li>
    </ul>
</body>
</html>