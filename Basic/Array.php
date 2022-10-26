<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    


    <h3>ARRAY IN PHP</h3>

    <h3>INDEX ARRAY</h3>

    <?php
    $color = ['blue', 'orange', 'Yellow', 'Red']; //Create Array in Single dimensional
    echo $color[0] . '<br>';

    echo '<pre>';
    print_r($color);
    echo '</pre>';

    echo '<ul>';
    for ($i = 0; $i <= 3; $i++) {
        echo "<li>Array[$i] => $color[$i]</li>";
    }

    echo '</ul>';
    ?>

    <h3>ASSOCIATIVE ARRAY</h3> 

    <?php
    $Student = ['Name' => 'Abc', 'Age' => 18, 'Education' => 'Inter'];

    echo '<pre>';
    print_r($Student);
    echo '</pre>';

    foreach ($Student as $key => $Value) {
        echo "Array[$key] => $Value <br>";
    }
    ?>
</body>
</html>