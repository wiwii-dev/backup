<?php
$product =[
           ["name" => "squishy", "price" => 20000, "stock" => 100, "sold" => 20,
           "img"=>"miawmiaw.jpg"],
           ["name" => "bunga lily", "price" => 100000, "stock" => 600, "sold" => 90,
           "img"=>"lily.jpg"],
           ["name" => "flatshoes", "price" => 500000, "stock" => 500, "sold" => 40,
           "img"=>"blue.jpg"],
           ["name" => "ysl heals", "price" => 3000000, "stock" => 700, "sold" => 20,
           "img"=>"punyaku.jpg"],
           ["name" => "tumbler stanley", "price" => 950000, "stock" => 50, "sold" => 80,
           "img"=>"yayaya.jpg"]
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
 <div class="container">
       <h1>Catalog product</h1>
       <div class="catalog">
    
        
     <?php $x =1; foreach($product as $product) : ?>       
            <div class ="card">
                <img src="img/<?php echo $product["img"]; ?>" alt="product"  width="200">
                <h3><?php echo $product["name"]; ?></h3>
                <p>Rp <?php echo $product["price"]; ?></p>
                <p>stock : <?php echo $product["stock"]; ?></p>
                <p>Sold : <?php echo $product["sold"]; ?></P> 
                <a href>Detail Produk</a>
            </div>
         <?php endforeach; ?>
     </div>
</body>
</html>