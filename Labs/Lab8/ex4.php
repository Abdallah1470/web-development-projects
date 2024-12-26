<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial Calculation</title>
</head>

<body>
    <h1>Factorial of Numbers</h1>
    <?php
        // Function to calculate the factorial of a number
        function calculateFactorial($number) {
            $factorial = 1;
            for ($i = 1; $i <= $number; $i++) {
                $factorial *= $i; // Multiply the current value of factorial by $i
            }
            return $factorial;
        }

        // Array of numbers to calculate factorial for
        $numbers = array(1, 2, 3, 4, 5);

        // Loop through each number and calculate/display its factorial
        foreach ($numbers as $number) {
            $factorial = calculateFactorial($number);
            echo "<div style=\"padding: 10px; border: 1px solid; margin-bottom: 20px;\">";
            echo "<h2>Number: $number.</h2>";
            echo "<p>Factorial: $factorial.</p>";
            echo "</div>";
        }
    ?>
</body>

</html>