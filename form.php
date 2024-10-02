<?php
    //prendiamo il valore che si trova dentro a paragrafo
    $paragrafo = $_GET["paragrafo"];

    //prendiamo il valore che si trova dentro a parola
    $parola = $_GET["parola"];
    $parola= '***'


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
    <p>Hai scritto questo paragrafo: <?php echo $paragrafo;?></p>
    <p>Il paragrafo è lungo: <?php echo strlen($paragrafo) ?> caratteri</p>
    <p>Hai scritto questa parola: <?php echo $parola;
      
        ?>
    </p>
</body>
</html>