<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h3>SIMPLE FUNCTIONS</h3>
    <?php
    function Add()
    {
        $num1 = 90;
        $num2 = 80;
        $res = $num1 + $num2;
        echo "<p>Result is $res</p>";
    }

    Add();
    ?>

    <h3>PARAMETERIZED FUNCTIONS</h3>
    <?php
    function Avg($n1, $n2, $n3)
    {
        $Sum = $n1 + $n2 + $n3;
        $Avg = $Sum / 3;
        echo "The Average Value is : $Avg";
    }

    Avg(10, 20, 30);
    ?>

<h3>FUNCTION WITH DEFAULT VALUE</h3>
<?php
function WithDefault($name, $Age = 12)
{
    echo "Name is $name and Age is $Age";
}
WithDefault('Abc', 18);
?>
<h3>RETURN VALUE IN FUNCTION</h3>

<?php
function Cube($num)
{
    $number = $num * $num * $num;
    return $number;
}
$SaveValue = Cube(3) + 3;
echo "Cube of 3 is $SaveValue";
?>
<h3>FUNCTION WITH PASS BY  VALUE</h3>

<?php
function PassVal($num)
{
    $num += 4; //$num = $num + 4 // 14 = 10 + 4
    echo "Pass By Actual Value Res $num <br>";
    return $num;
}
$n = 10;
PassVal($n);
echo "The original Value is still  $n";
?>

<h3>FUNCTION WITH PASS BY  REFERENCE</h3>
<?php
function RefVal(&$num)
{
    $num += 4; //$num = $num + 4 // 14 = 10 + 4
    echo "Pass By Ref Value Res $num <br>";
    return $num;
}
$n = 10;
RefVal($n);
echo "The original Value change to $n";
?>




</body>
</html>