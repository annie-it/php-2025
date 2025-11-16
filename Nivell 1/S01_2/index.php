<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sprint1</title>
</head>
<body> 

    <?php 
    // Ejercicio 2

    $message = "Hello, World!";
    echo $message . "<br>";

    //Convert to Uppercase

    $uppercase = strtoupper($message);
    echo $uppercase ."<br>";

    //Print of de string
    $length = strlen($message);
    echo $length ."<br>";

    //Print in reverse
    $reversed = strrev($message);
    echo $reversed ."<br>";

    //Nev variable

    $newText = "This is the PHP course";
    $concatenated = $message . " " . $newText;
    echo $concatenated . "<br>";

    ?>

</body>
</html>