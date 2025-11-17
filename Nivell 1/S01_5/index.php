<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sprint1</title>
</head>
<body> 

    <?php 

    echo"<h2>Ejercicio 5</h2>";

    function student($score) {
        if ($score >= 60){
            return"First Division";
        } else if ($score >= 45){
            return "Second Division";
        } else if ($score >= 33){
            return "Third Division";
        } else  
            return "Failed";
    }
    echo student(71). "<br>";
    echo student(52). "<br>";
    echo student(36). "<br>";
    echo student(22). "<br>";
            ?> 

</body>
</html>