<!DOCTYPE html>
<head>
<title>Pemrosesan file</title>
</head>

<body>
    <h2>Penggunaan date untuk tanggal, hari, jam</h2>
    <pre>
        <?php 
        echo("Hari ini adalah hari ".date("4")."<br>");
        echo("Tanggal ".date("d F Y")."<br>");
        echo("Jam ".date("H:i:s"));
        ?>

</body>