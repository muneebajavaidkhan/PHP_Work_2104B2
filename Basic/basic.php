<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

        <h1>START PHP</h1>
        <?php
        echo '<h1>Hello PHP</h1> <br>';

        echo 90;

        echo '<br>';

        $a = 10;
        $b = 15;
        $c = $a + $b;

        echo 'Value of a: ' .
            $a .
            ' and value of b: ' .
            $b .
            ' result is: ' .
            $c;
        echo '<br>';

        var_dump($c);

        echo '<h3>SWAP TWO Num</h3>';
        $num1 = 20;
        $num2 = 30;

        echo '<b> The num before swapping is: </b><br>';
        echo "num1 = $num1 and num2 = $num2 <br>";

        $temp = $num1; //20
        $num1 = $num2; //30
        $num2 = $temp; //20

        echo '<b> The num after swapping is: </b><br>';
        echo "num1 = $num1 and num2 = $num2 <br>";
        ?>

        <h3>PHP STRING FUNCTION</h3>


        <?php
        $stringChar = 'Hello Steve';

        $stringLen = strlen($stringChar); //string length
        $stringWordCount = str_word_count($stringChar); //word count
        $stringRev = strrev($stringChar); //string Reverse

        $stringFind = strpos($stringChar, 'Steve'); //string position
        $StringReplace = str_replace('Steve', 'Diana', $stringChar);

        echo "Length of string <b> ' $stringChar' </b> is: $stringLen <br>";
        echo "Count of string <b> ' $stringChar' </b> is: $stringWordCount<br>";

        echo "Reverse of string <b> ' $stringChar' </b> is: $stringRev <br>";

        echo "Find of string <b> ' $stringChar' </b> is:  $stringFind <br>";

        echo "Find of string <b> ' $stringChar' </b> is:  $StringReplace <br>";
        ?>

    <h3>PHP MATH FUNCTION</h3>
    <?php
    echo '<h5> Area of Surface </h5>';
    $radius = 6;
    $surfaceArea = 4 * pi() * $radius * $radius;

    echo "Surface of Area is: $surfaceArea <br>";

    echo min(0, 20, 70, -90, -800) . '<br>';

    echo max(0, 20, 70, -90, -800);
    ?>

    <h3>CONSTANT VARIABLE </h3>
    <?php
        define('Hello', 'What new in PHP', true);

        echo hello;

        echo "<h5>GLOBAL CONSTANT</h5>";

        define("HelloVar","What Something new in PHP",true);


        function myTest(){

            echo HelloVar;
        }
        myTest();

    ?>

   


</body>
</html>