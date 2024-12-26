<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of your favorite fruits</title>
</head>

<body>
    <h1>List of your favorite fruits</h1>
    <ul>
        <?php
            $fruits = array("Apples", "Bananas", "Cherries", "Dates");
            foreach ($fruits as $fruit) {
                echo "<li>$fruit</li>";
            }
        ?>
    </ul>
</body>

</html>