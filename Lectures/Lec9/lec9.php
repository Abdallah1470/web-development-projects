<!DOCTYPE html>
<html>

<body>
    <pre>
    <?php
    echo "Hello World!<br>";
    echo "Hello World!<br>";
    echo "Hello World!<br>";
    $color = "red";
    $COLOR = "Blue";
    $coLOR = "green";
    echo "My car is " . $color . "<br>";
    echo "My house is " . $COLOR . "<br>";
    echo "My boat is " . $coLOR . "<br>";
    echo ("Hello");
    echo "<br> $coLOR <br>";
    var_dump(5);
    var_dump("Ahmed");
    var_dump(3.14);
    var_dump(true);
    var_dump(["aaa", 5, 'm']);
    var_dump(NULL);
    ?>
    <?php
    $x = 5; // global scope
    function myTest()
    {
        // using x inside this function will generate an error should write global inside
        global $x;

        echo "<p>Variable x inside function is: $x</p>";
    }
    myTest();
    echo "<p>Variable x outside function is: $x</p>";
    $m = "aaaa";
    $m .= "ffff";
    echo $m;

    $t = date("H");
    echo "<p>The hour (of the server) is " . $t;
    echo ", and will give the following message:</p>";
    if ($t < "10") {
        echo "Have a good morning!";
    } elseif ($t < "20") {
        echo "Have a good day!";
    } else {
        echo "Have a good night!";
    }
    echo "<br>";
    $d = 1;
    switch ($d) {
        case 6:
            echo "Today is Saturday";
            break;
        case 0:
            echo "Today is Sunday";
            break;
        default:
            echo "Looking forward to the Weekend";
    }
    echo "<br>";
    for ($x = 100; $x >= 0; $x -= 10) {
        echo "The number is: $x <br>";
    }

    $i = 0;
    do {
        $i++;
        if ($i == 3) continue;
        echo $i;
    } while ($i < 6);


    function setHeight($minheight = 50)
    {
        echo "The height is : $minheight <br>";
    }
    setHeight(350);
    setHeight();
    setHeight(135);
    setHeight(80);


    $cars = array("Volvo", "BMW", "Toyota");
    echo count($cars) . "<br>";
    echo $cars[0];
    echo "<br>";
    $car = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
    echo $car["model"];
    ?>



    </pre>

</body>

</html>