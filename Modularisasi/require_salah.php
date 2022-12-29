<!DOCTYPE html>
<head>
<title>Penggunaan Modularisasi</title>
</head>

<body>
    <h2>Penggunaan require</h2>
    <pre>
        <?php 
        // require yang salah 
        require("function.php");
        echo("Luas segiempat dengan p = 2 dan 1 = 4 adalah ".luas(2,4));
        require("function.php");
        echo("Luas segiempat dengan p = 2 dan 1 = 4 adalah ".luas(6,3));
        ?>

</body>