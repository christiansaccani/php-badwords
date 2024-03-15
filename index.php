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
            <label for="exampleFormControlTextarea1" class="form-label">Inserisci qui il tuo testo: </label>
            <input name="original_text" type="text" id="text_area">
        </div>
        <div class="mb-3 my_txt">
            <label for="">Parola da censurare: </label>
            <input name="bad_word" type="text" placeholder="***">
        </div>
        <input id="submit" type="submit">
    </form>
</body>
</html>