<?php
    //prendiamo il valore che si trova dentro a paragrafo
    $paragrafo = $_GET["paragrafo"];

    //prendiamo il valore che si trova dentro a parola
    $parola = $_GET["parolaCensurata"];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="m-5 fs-1">
    <div class="bg-secondary rounded-3 text-white p-3 mb-5">
        <p>Hai scritto questo paragrafo: <?php echo $paragrafo;?></p>
        <p>Il paragrafo è lungo: <?php echo strlen($paragrafo) ?> caratteri</p>
    </div>
    <div class="bg-warning rounded-3 p-3">
        <p>Hai scritto questo paragrafo: <?php  $paragraph; echo str_ireplace($parola, "***", $paragrafo); ?></p>
        <p>Il paragrafo è lungo: <?php echo strlen($paragrafo) ?> caratteri</p>
    </div>
</body>
</html>