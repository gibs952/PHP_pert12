<!DOCTYPE html>
<head>
<title>Pemrosesan file</title>
</head>

<body>
    <h2>Penulisan data ke dalam file dengan fwrite dan fopen</h2>
        <?php
        $file='F:\\ujian\\kunch.txt';
        $fo=fopen($file,"w");
        $data='Tes Write file ini OK '.$file.' !';
        fwrite($fo, $data);
        fclose($fo);
        echo("Cek isi file di <b> $file </b> !")
        ?>

</body>