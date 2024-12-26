<?php
$isLoggedIn = true;
$userName = "Abdallah";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Status</title>
    <style>
    .container {
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        font-family: Arial, sans-serif;
        font-size: 24px;
    }

    .message {
        padding: 20px;
        background-color: #f0f0f0;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="message">
            <?php
            if ($isLoggedIn) {
                echo "Hello " . htmlspecialchars($userName);
            } else {
                echo "Hello Stranger";
            }
            ?>
        </div>
    </div>
</body>

</html>