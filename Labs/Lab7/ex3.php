<?php
function fibonacci($n) {
    if ($n <= 0) return 0;
    if ($n == 1) return 1;
    $prev = 0;
    $current = 1;
    for ($i = 2; $i <= $n; $i++) {
        $temp = $current;
        $current = $prev + $current;
        $prev = $temp;
    }
    
    return $current;
}

function getFibonacciSequence($n) {
    $sequence = [];
    for ($i = 0; $i <= $n; $i++) {
        $sequence[] = fibonacci($i);
    }
    return $sequence;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci Number</title>
    <style>
    .container {
        margin: 50px auto;
        max-width: 600px;
        font-family: Arial, sans-serif;
    }

    .result {
        background-color: #f0f0f0;
        padding: 20px;
        border-radius: 5px;
        margin-top: 20px;
    }

    .sequence {
        color: #666;
        margin-top: 10px;
    }
    </style>
</head>

<body>
    <div class="container">
        <h1>Fibonacci Calculator</h1>

        <div class="result">
            <h2>Fibonacci(5):</h2>
            <?php
            $fib5 = fibonacci(5);
            echo "<p>The 5th Fibonacci number is: <strong>$fib5</strong></p>";
            
            // Show the complete sequence for context
            $sequence = getFibonacciSequence(5);
            echo "<div class='sequence'>";
            echo "Complete sequence up to n=5: ";
            echo implode(", ", $sequence);
            echo "</div>";
            ?>
        </div>
    </div>
</body>

</html>