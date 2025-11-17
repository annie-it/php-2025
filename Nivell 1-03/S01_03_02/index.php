<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sprint1</title>
</head>
<body> 
    <?php 
    echo"<h2>Ejercicio 2</h2>";

    $array = [11, 22, 33, 44, 55, 66];

    echo "Real" . count($array). "<br>";
    echo "Initial content:<br>";

    foreach ($array as $index => $value) {
    echo "Indice $index-> $value<br>";
    }
    echo "<hr>";
    unset($array[3]);
    echo "After deleiting the index 3:<br>";
    foreach ($array as $index => $value) {
    echo "Índice $index-> $value<br>";
    }
    echo "<hr>";

    $array = array_values($array);
    echo "Array with mormalized índices:<br>";
    foreach($array as $index => $value){
        echo "Índice $index-> $value<br>";
    }
    echo "<br>This is actual array;" . count($array)."<br>";

    ?>
</body>
</html>
