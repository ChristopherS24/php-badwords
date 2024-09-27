<?php
    $name = 'Chris';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <h1>Badwords</h1>

    <div>
        <p>
            Mi chiamo: <?php echo $name; ?>
        </p>
        <p>Messaggio:</p>
        <form action="about.php" method="POST">
        <textarea name="messaggio" id="messaggio"></textarea>
        <button type='submit'>Invia</button>

        </form>

        <a href="./about.php">
            Avanti
        </a>
       
    </div>
    
    <form action="./about.php">


    </form>
    
<!--JS-->
    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>