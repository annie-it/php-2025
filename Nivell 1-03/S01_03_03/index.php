<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sprint1</title>
</head>
<body> 
    <?php 
    echo"<h2>Ejercicio 3</h2>";

    function AllsContent($lista, $texto) {

    foreach ($lista as $item) {
        if (stripos($texto, $item) === false) {
            return false;
        }
    }  
 
    return true;
    }

    $lista = ["Sola", "Wonder", "full"];

    var_dump(AllsContent($lista,"wonderfullsola")); //true
    var_dump(AllsContent($lista,"sola")); //false
    
?>
</body>
</html>