<html>

<head>
    <title>Test</title>
</head>

<body>
    <ul>
        <?php
        $names = ["Ahmed", "Ali", "Alamat", "Jason", "Taison", "Tahun"];
        $grade = ["A+", "A", "B", "B+", "C", "C-"];
        $len = count($names);

        for ( $i = 0; $i < $len; $i++ ) {
      ?>
        <li><?= "Student-".$i." = Name: ". $names[$i] . " , Grade : ". $grade[$i] ?></li>
        <?php
        }
      ?>
    </ul>
</body>

</html>