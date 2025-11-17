<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sprint1</title>
</head>
<body> 
    <?php 
    
    echo"<h2> Ejercicio 4 </h2>";

    function countNumbers($end = 10, $step = 1) {   
        for ($i = 0; $i <= $end; $i+= $step) {
            echo $i . "<br>";
        }
    }

    echo"<h2> Examples </h2>";

    countNumbers();
    echo "<br>";
    countNumbers("10","2");
    ?>

</body>
</html>
?>