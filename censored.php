<?php 

$original_text = $_GET['original_text'];

$bad_word = $_GET['bad_word'];

$censored_text = str_replace($bad_word, "***", $original_text);

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words: Censored</title>

    <!-- boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Bad Words</h1>

    <p class="mb-3">
        Testo Originale: <?php echo $original_text ?><br>
        Lunghezza: <?php echo strlen($original_text) ?> caratteri.
    </p>

    <p>
        Testo Censurato: <?php echo $censored_text ?><br>
        Lunghezza: <?php echo strlen($censored_text) ?> caratteri.
    </p>
</body>
</html>