<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sprint1</title>
</head>
<body> 

    <?php 
    echo"<h2> Ejercicio 3</h2>";

    echo "<h3> Integer Variables </h3>";

    $X = "9";
    $Y = "3";

   echo "<h3> Double Variables </h3>";

    $N = "3.6";
    $M = "1.2";

    echo "<h3> Operations with X and Y </h3>";

    echo "X = $X, Y = $Y <br>";
    echo "Sum: " . ($X + $Y)."<br>";
    echo "Subtraction:". ($Y - $Y)."<br>";
    echo "Product". ($X * $Y) ."<br>";
    echo "Modulus". ($X % $Y) ."<br>";

    echo "<h3> Operations with N and M </h3>";
    

    echo "N = $N, M = $M <br>";
    echo "Sum: " . ($N + $M)."<br>";
    echo "Subtraction:". ($N - $M)."<br>";
    echo "Product". ($N * $M) ."<br>";

    echo "Operation with all variables </h3>";
    

    echo "Double of X: ". ($X * 2) ."<br>";
    echo "Double of Y: ". ($Y * 2) ."<br>";
    echo "Double of N: ". ($N * 2) ."<br>";
    echo "Double of M: ". ($X * 2) ."<br>";
    echo "Sum of all variables: " . ($X + $Y + $N + $M) ."<br>";
    echo "Product of all variables: " . ($X * $Y * $N * $M) ."<br>";

//Variables ejercicio 3b
    echo"<h2> Ejercicio 3b</h2>";


    function calculate($num1, $num2, $operation) {
        switch ($operation) {   
            case "sum":
                return $num1 + $num2;
            case "subtract":    
                return $num1 - $num2;
            case "multiplication":
                return $num1 * $num2;
            case "division":
               if ($num2 == 0) {
                return "Error: division by zero";
               } else {
                return $num1 / $num2;
               }
               default:
               return "Error: invalid operation";
            }
    }
    echo "<h2>Results</h2>";

    echo "Result of sum: " . calculate(11,6, "sum"). "<br>";
    echo "Result of subtraction: ". calculate(11,6, "subtract"). "<br>";
    echo "Result of multiplication: ". calculate(11,6, "multiplication"). "<br>";
    echo "Result of division: ". calculate(11,6, "division"). "<br>";
    echo "Result of invalid operation: ". calculate(11,6, "power"). "<br>";   
    ?>

</body>
</html>