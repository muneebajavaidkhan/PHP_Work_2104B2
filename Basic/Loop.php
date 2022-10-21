<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<h3>While Loop</h3>
    <form action= "Loop.php" method = "post">

        <input type="number" name = "num" placeholder = "Enter your num">
        <input type="submit" value = "Submit" name = "ChckNum">
    
    </form>


    <?php if (isset($_POST['ChckNum'])) {
        $number = $_POST['num'];
        $i = 1;
        while ($i < 10) {
            $res = $number * $i;
            echo "$number * $i = $res <br>";
            $i++;
        }
    } ?>

<h3>For Loop</h3>
    <form action= "Loop.php" method = "post">

        <input type="number" name = "num1" placeholder = "Enter your num1">
        <input type="number" name = "num2" placeholder = "Enter your num2">
        <input type="number" name = "numIte" placeholder = "Enter your num of Iterations">


        <input type="submit" value = "Fib Series" name = "FibNum">
    
    </form>


    <?php if (isset($_POST['FibNum'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $numIte = $_POST['numIte'];

        echo $num1 . '<br>';
        echo $num2 . '<br>';

        for ($i = 0; $i < $numIte; $i++) {
            $num3 = $num1 + $num2;
            $num1 = $num2;
            $num2 = $num3;

            echo $num3 . '<br>';
        }
    } ?>
</body>
</html>