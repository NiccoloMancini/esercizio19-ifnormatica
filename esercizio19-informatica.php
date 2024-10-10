<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $domanda = "Qual è il pianeta più vicino al sole?";
        $risposte = ["Mercurio", "Venere", "Terra", "Marte", "Giove"];
        echo "<p><i><b>$domanda</b></i></p>";
        foreach ($risposte as $risposta){
            echo "<input type='radio' name='riposta'> $risposta<br>";
        }
    ?>
</body>
</html>