<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>

    <!-- boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Bad Words</h1>

    <form action="censored.php" method="GET" id="my_form">
        <div class="mb-3 my_txt">
            <label class="form-label">Inserisci qui il tuo testo: </label>
            <textarea name="original_text" class="form-control" id="text_area" rows="3"></textarea>
        </div>
        <div class="mb-3 my_txt">
            <label class="form-label">Parte da censurare: </label>
            <textarea name="bad_word" class="form-control" placeholder="***" rows="1"></textarea>
        </div>
        <input id="submit" type="submit">
    </form>
</body>
</html>