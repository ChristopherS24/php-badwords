<?php
    $messaggio = $_POST["messaggio"];
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
    Messaggio segreto:
</h1>

<div>
    <h3>Risposta: <?php echo $messaggio ?> </h3>
    

    <p>Risposta censurata:</p>
</div>

<a href="./index.php">
    Torna indietro
</a>
    
</body>
</html>