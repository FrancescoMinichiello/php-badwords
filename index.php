<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-6">
                <form action="./form.php" method="GET">
                  <div class="form-group">
                    <label for="paragrafo">Inserisci un paragrafo</label>
                    <input type="text" class="form-control my-2" id="paragrafo" aria-describedby="paragrafo" placeholder="Inserisci un paragrafo" name="paragrafo">
                  </div>
                  <div class="form-group">
                    <label for="parola">Inserisci una parola</label>
                    <input type="text" class="form-control my-2" id="parola" aria-describedby="parola" placeholder="Inserisci una parola" name="parola">
                  </div>
                  <button class="btn btn-primary btn-xl">Invia</button>
                  <button type="reset" class="btn btn-primary btn-xl bg-warning">Reset</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>