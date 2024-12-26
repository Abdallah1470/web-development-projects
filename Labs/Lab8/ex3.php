<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students and their Grades</title>
</head>

<body>
    <h1>Students and their Grades</h1>
    <?php
        // Function to display a student's grade based on their score
        function displayStudentGrade($name, $score) {
            echo "<div style=\"padding: 10px; border: 1px solid; margin-bottom: 20px;\">";
            
            echo "<h2>Student Name: $name</h2>";

            switch ($score) {
                case ($score >= 90):
                    echo "<p>Grade: A</p>";
                    break;
                case ($score >= 80):
                    echo "<p>Grade: B</p>";
                    break;
                case ($score >= 70):
                    echo "<p>Grade: C</p>";
                    break;
                case ($score >= 60):
                    echo "<p>Grade: D</p>";
                    break;
                default:
                    echo "<p>Grade: F</p>";
                    break;
            }

            echo "</div>";
        }

        // Array of students and their grades
        $students = array(
            "Alice" => 95,
            "Bob" => 82,
            "Charlie" => 68,
            "Diana" => 73,
            "Eve" => 58
        );

        // Loop through each student and display their grade
        foreach ($students as $name => $score) {
            displayStudentGrade($name, $score);
        }
    ?>
</body>

</html>