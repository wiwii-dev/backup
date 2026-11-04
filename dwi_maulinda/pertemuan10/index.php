<?php 

$siswa = [
            ["dwi", "rekayasa perangkat lunak", "SMKN 1 tapur"],
            ["ame kaban", "IPS", "SMAN 1 tapur"],
            ["adea", "rekayasa perangkat lunak", "SMAN 1 tapur"],
            ["elisa", "IPA", "SMAN 1 tapur"],
            ["manda", "rekayasa perangkat lunak", "SMAN 1 tapur"]
         ];
 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach($siswa as $s): ?>
    <ul>
        <li>nama: <?=$s[0]; ?></li>
        <li>jurusan: <?=$s[1]; ?></li>
        <li>sekolah: <?=$s[2]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>