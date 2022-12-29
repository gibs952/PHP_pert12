<!DOCTYPE html>
<head>
<title>Penggunaan Modularisasi</title>
</head>

<body>
    <h2>Penggunaan include</h2>
    <pre>
        <?php 
        // include sama seperti require hanya saja kesalahan input file atau directory masih bersifat warning, artinya tidak akan benar benar fatal error
        include("script2.php");
        echo("<hr> Selamat datang !");
        ?>

</body>