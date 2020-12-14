<?php

$frase_paragrafo = 'La scelta del libro di testo rappresenta un momento molto importante perché il libro di testo è lo strumento principale.';
$parola = $_GET['parola'];
$frase_modificata = str_replace($parola, '***',$frase_paragrafo);
$lunghezza = strlen($frase_paragrafo);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Censuratore</title>
    </head>
    <body>
        <h4>
            <?php echo $frase_modificata ?>
        </h4>
        <p>
            <?php echo $lunghezza ?>
        </p>
    </body>
</html>
