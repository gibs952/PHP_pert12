<!DOCTYPE html>
<head>
<title>Pemrosesan file</title>
</head>

<body>
    <h2>Pembacaan file dengan <b>fread()</b></h2>
        <?php
        $file='F:\\ujian\\kunch.txt';
        // syntax jika file yang diperiksa ada lalu ketahui tipe filenya apa
        if (file_exists($file)){
            $fo=fopen($file, "r");
            $isi = fread ($fo, filesize("$file"));
            echo ("Isi dari file <b> $file </b> adalah <b>\"$isi\"</b>");
            fclose($fo);
        }else{
            echo("File <b> $file </b> tidak ada !" );
        }
        ?>

</body>