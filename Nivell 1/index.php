<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sprint1</title>
</head>
<body> 

<?php 
// Variables
$integerNumber = 8;
echo "Integer:$integerNumber<br>";

$decimalNumber = 2.22;
echo "Double: $decimalNumber<br>";

$text = "Started en PHP";
echo "String: $text<br>";

$isTrue = true;
echo "Boolean: " . ($isTrue ?"true" : "false") ."<br>";

//Constant may name
define("NAME", "Annie Edyta");
echo "<h2>" . NAME . "</h2>";
?>

</body>
</html>