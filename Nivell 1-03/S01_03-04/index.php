<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sprint1</title>
</head>
<body> 

    <?php

        echo "<h2>Ejercicio 4</h2><br>";

        $myInfo =[
        "name" => "Annie",
        "age" => 54,
        "email"=> "annie@example.com",
        "favorite_food" => "Apple"
        ];
        echo "My personal information:<br>";

        foreach ($myInfo as $key =>$value){
            echo ucfirst($key). ": $value<br>";
        }

    ?>  
</body>
</html>
   