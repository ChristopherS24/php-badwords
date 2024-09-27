<?php
    $nome = $_POST["nome"];
    $messaggio = $_POST["messaggio"];
    $lunghezzaOriginale = strlen($messaggio);
    $parolaCensurata = str_ireplace( $messaggio, 'messaggio', '***');
    $lunghezza_censurata = strlen($parolaCensurata)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords About</title>
</head>
<body>

<h1>
    Nome:
    <?php echo $nome ?>
</h1>

<div>
    <h3>
        Messaggio: 
        <?php echo $messaggio ?> 
        <?php echo($lunghezzaOriginale) ?>
    </h3>
</div>
<div>
    <p>
        Messaggio censurato:
        <?php echo($parolaCensurata) ?>
        <?php echo($lunghezza_censurata) ?>
    </p>
</div>

<a href="./index.php">
    Torna indietro
</a>
    
</body>
</html>