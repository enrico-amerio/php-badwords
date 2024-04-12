<?php
  $censor = $_POST['bad_word'];
  $text = $_POST['text'];
  $censored_text = str_replace($censor,'***', $text);
  $length_str_full = strlen($text);
  $length_str_censored = strlen($censored_text);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
  <div class="container">
    <h1 class="text-center">Censuratore automatizzato</h1>
    <p>Hai chiesto di censurare la parola "<?php echo $censor ?>" dal seguente testo:</p>
    <p>"<?php echo $text ?>" che è lungo <?php echo $length_str_full ?> caratteri.</p>
    <p>Ecco il tuo testo censurato: <?php echo $censored_text ?>. Dopo questa modifica la lunghezza del paragrafo è di: <?php echo $length_str_censored ?> caratteri.</p>
  </div>
</body>
</html>