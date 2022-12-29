<!DOCTYPE html>
<head>
<title>Penggunaan Modularisasi</title>
</head>

<body>
    <h2>Penggunaan require</h2>
    <pre>
        <?php 
        // require_once adalah apabila file sudah digabungkan, maka file tidak akan bisa diganungkan lagi
        require_once("function.php");
        echo("Luas segiempat dengan p = 2 dan 1 = 4 adalah ".luas(2,4)."<br> </pre>");
        require_once("function.php");
        echo("Luas segiempat dengan p = 2 dan 1 = 4 adalah ".luas(5,8)."<br> </pre>");
        ?>

</body>