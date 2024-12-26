<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Families and their information</title>
</head>

<body>
    <h1>Families and their information</h1>
    <?php
            // Function to display family information
            function displayFamilyInformation($name, $year) {
                echo "<div style=\"padding: 10px; border: 1px solid; margin-bottom: 20px;\">";

                echo "<h2>Family name is $name.</h2>";

                echo "<p>This family was born in $year.</p>";

                echo "</div>";
            }

            // Array of families 
            $families = array(
                "First family" => 1920,
                "Second family" => 1937,
                "Third family" => 1962,
            );

            foreach ($families as $name => $year) {
                displayFamilyInformation($name, $year);
            }
        ?>
</body>

</html>