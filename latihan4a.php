<?php

$nama = ["Hijau", "Kuning", "Kelabu", "Merah Muda", "Biru"];
$angka = [1,2,3,4];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>latihan4a</title>
</head>
<body>
    <p>Balonku ada lima.<br>
       Rupa-rupa warna-nya<br>

    <?php
        for ($i = 0; $i < 4 ; $i++) {
            echo "$nama[$i],";
        } {


        }

    ?> dan <?php echo "$nama[4]"; ?>
    <br>Meletus balon hijau <?php echo "$nama[0]";?> DOR!!<br>
        Hatiku sangat kacau.

        <p>
</body>
</html>