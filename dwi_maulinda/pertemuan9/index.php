<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>katalog produk</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&family=Noto+Sans+JP:wght@100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Questrial&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
       <h1>Catalog mobil</h1>
       <div class="catalog">
        <?php for ($i=0; $i < 20; $i++): ?>
            <div class="card">
            <img src="img/mobil.jpg" alt="">
            <h3>mobil mobilan</h3>
            <p>Rp 1.190.000.000</P>
            <p>Terjual : 490</p>
            <p>Stock: 100</P>
              </div>
              <?php endfor; ?>
    </div>
</body>
</html>