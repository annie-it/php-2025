<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sprint1</title>
</head>
<body> 
    <?php 
    echo"<h2>Ejercicio 6</h2>";

    echo"<h3>50% TRUE, 50% FALSE</h3>";
    function isBitten() {
        return rand(0, 1) === 1;
    }

    if (isBitten()) {
    echo "TRUE" . "<br>";
    } 
    else {
    echo "FALSE" . "<br>";
    }
?>
</body>
</html>
