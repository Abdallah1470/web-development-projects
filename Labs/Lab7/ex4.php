<?php
$currentHour = date('H');
$isWorkingHours = ($currentHour >= 9 && $currentHour < 17);
$userPreference = isset($_GET['theme']) ? $_GET['theme'] : 'light';
$userName = "John"; // This would typically come from a session

function generateCustomJS($isWorkingHours, $theme, $userName) {
    $js = "// Dynamically generated JavaScript\n";
    $js .= "const config = {\n";
    $js .= "    userName: '" . addslashes($userName) . "',\n";
    $js .= "    theme: '" . addslashes($theme) . "',\n";
    $js .= "    timestamp: " . time() . ",\n";
    $js .= "    isWorkingHours: " . ($isWorkingHours ? 'true' : 'false') . "\n";
    $js .= "};\n\n";

    if ($isWorkingHours) {
        $js .= "function showGreeting() {\n";
        $js .= "    const message = 'Welcome back to work, ' + config.userName + '!';\n";
        $js .= "    updateUI(message);\n";
        $js .= "    enableWorkMode();\n";
        $js .= "}\n\n";
    } else {
        $js .= "function showGreeting() {\n";
        $js .= "    const message = 'Enjoying your free time, ' + config.userName + '?';\n";
        $js .= "    updateUI(message);\n";
        $js .= "    enableLeisureMode();\n";
        $js .= "}\n\n";
    }

    if ($theme === 'dark') {
        $js .= "function applyTheme() {\n";
        $js .= "    document.body.style.backgroundColor = '#333';\n";
        $js .= "    document.body.style.color = '#fff';\n";
        $js .= "}\n";
    } else {
        $js .= "function applyTheme() {\n";
        $js .= "    document.body.style.backgroundColor = '#fff';\n";
        $js .= "    document.body.style.color = '#333';\n";
        $js .= "}\n";
    }

    return $js;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic JavaScript Demo</title>
    <style>
    .container {
        margin: 50px auto;
        max-width: 800px;
        padding: 20px;
        font-family: Arial, sans-serif;
    }

    #message {
        margin: 20px 0;
        padding: 15px;
        border-radius: 5px;
        background-color: #f0f0f0;
    }
    </style>
</head>

<body>
    <div class="container">
        <h1>Dynamic JavaScript Example</h1>
        <div id="message"></div>
        <button onclick="location.href='?theme=<?php echo $userPreference === 'light' ? 'dark' : 'light' ?>'">
            Toggle Theme
        </button>
    </div>

    <script>
    function updateUI(message) {
        document.getElementById('message').textContent = message;
    }

    function enableWorkMode() {
        console.log('Work mode enabled - additional work-related features would be initialized here');
    }

    function enableLeisureMode() {
        console.log('Leisure mode enabled - relaxed features would be initialized here');
    }
    </script>

    <script>
    <?php 
        echo generateCustomJS($isWorkingHours, $userPreference, $userName);
        ?>

    document.addEventListener('DOMContentLoaded', () => {
        applyTheme();
        showGreeting();
    });
    </script>
</body>

</html>