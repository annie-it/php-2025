<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sprint1</title>
</head>
<body>
    <?php 
    echo"<h2>Ejercicio 1</h2>";

    class Employer  {
        public $name;
        public $lastName;
        public $salary;   

        function __construct($name) {
        $this->name = $name;
        }
        function get_name() {
        return $this->name;
        }
    
    }
    ?>


</body>
</html>