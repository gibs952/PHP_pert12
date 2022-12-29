<!DOCTYPE html>
<head>
<title>Penggunaan Modularisasi</title>
</head>

<body>
    <h2>Penggunaan require</h2>
    <pre>
        <?php 
        // include_once sama dengan require_once, hanya saja perbedaannya pada penanganan kesalahan seperti yang terjadi pada contoh requre dan iclude sebelumnya.
        // include_once menganggap kesalahan sebagai warning, sedangkan require_once menganggap fatal error
        include_once("script.php");
        echo("Luas segiempat dengan p = 2 dan 1 = 4 adalah ".luas(2,4)."<br> </pre>");
        include_once("script.php");
        echo("Luas segiempat dengan p = 2 dan 1 = 4 adalah ".luas(5,8)."<br> </pre>");
        ?>

</body>