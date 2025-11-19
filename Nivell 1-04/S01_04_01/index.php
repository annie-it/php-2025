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
    class Employer {
        private $name;
        private $salary;   

        public function __construct($name, $salary) {
            $this->name = $name;
            $this->salary = $salary;
            }
        public function payTaxes() {
            echo "Employer: ". $this->name ."<br>";

        if ($this->salary > 6000) {
            echo "Employer yes: Pay Taxes. <br>";
        } else {
            echo "Employer not: pay Taxes. <br>";
            }
        }
    }
        $employerA = new Employer( "Miriam","6600");
        $employerA->payTaxes();

        $employerB = new Employer( "Sam","4800");
        $employerB->payTaxes();
    
    ?>


</body>
</html>