<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sprint1</title>
</head>
<body>
    
    <?php

    echo "<h3> Ejercisio 3b Integer Variables </h3>";

    $a= 12; //rosas
    $b= 5; //margaritas

    function florcalculadora ($a, $b, $operation): mixed {

        switch ($operation) {

        //Juntamos flores
        case "sum":
            return $a + $b; 

        //quita un flor a donde demasiado	
        case "subtract":
             return $a - $b;

        //Cuando florece
            
        case "multiplication": //tal vez producto
            return $a * $b;

        case "division": 

            if ($b == 0) {        
            return "Error: division by zero"; // Jamas puedes romper flores con zero  
            } else { 
            return $a / $b;
            }
            default:
            return "Error: invalid operation";
            }
    }
        echo "<h2>Results</h2>";

        echo  "Result of sum:" . florcalculadora(12, 5, "sum"). "<br>";
        echo  "Result of subtraction:" . florcalculadora( 12, 5, "subtract")."<br>";
        echo  "Result of multiplication:" . florcalculadora( 12, 5,"multiplication")."<br>";
        echo  "Result of division:" . florcalculadora( 12, 5,"division")."<br>"; 
        echo  "Result of invalid operation:". florcalculadora( 12, 0, "division"). "<br>"; //Error: division by zero”;  Jamas puedes romper flores con zero
    ?>   

</body>
</html>	