<!DOCTYPE html>
<head>
<title>Pemrosesan file</title>
</head>

<body>
    <h2>File Exist(Pemeriksaan File)</h2>
        <?php
        $file='F:\\ujian\\kunch.txt';
        // syntax jika file yang diperiksa ada
        if (file_exists($file)){
            echo("File <b> $file </b> sudah ada !");
        }else{
            echo("File <b> $file </b> tidak Ada !");
        }
        ?>

</body>