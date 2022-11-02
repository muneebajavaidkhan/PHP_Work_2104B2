<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h3>Sort Function Apply Index Array</h3>
<?php
$color = ['Blue', 'Orange', 'Yellow', 'Red'];

//assending
// sort($color);
//descending
// rsort($color);

array_push($color, 'LightBlue');

array_pop($color);

$noOfElement = count($color); //4

echo $noOfElement;
//Array using Loop
echo '<ul>';
for ($i = 0; $i < $noOfElement; $i++) {
    echo "<li>Array[$i] => $color[$i]</li>";
}
echo '</ul>';
?>


 <h3>ASSOCIATIVE ARRAY ASSENDING ORDER</h3>
     <?php
     $students = ['Name' => 'Abc', 'Age' => 12, 'Education' => 'Inter'];

     asort($students); //According to values
     ksort($students); //According to key
     foreach ($students as $key => $Val) {
         echo "Array[$key] => $Val <br>";
     }
     ?>



    
<h3>ASSOCIATIVE ARRAY DESENDING ORDER</h3>
     <?php
     $students = ['Name' => 'Abc', 'Age' => 12, 'Education' => 'Inter'];
     //     echo $students['Name'];

     arsort($students); //According to Values
     krsort($students); //According to Key
     foreach ($students as $key => $Val) {
         echo "Array[$key] => $Val <br>";
     }
     ?>
</body>
</html>