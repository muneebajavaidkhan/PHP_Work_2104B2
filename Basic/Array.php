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

    <h3>MULTIDIMENSIONAL INDEX ARRAY Ex1</h3>

    <?php
    $Stud = [
        ['Abc', 'Inter', 19], //0
        ['Xyz', 'Matric', 18], //1
        ['Efg', 'Graduate', 20], //2
    ];
    echo '<pre>';
    print_r($Stud);
    echo '</pre>';

    for ($row = 0; $row < 3; $row++) {
        // 0< 3

        echo '<p>Row Number ' . $row . '</p>';
        echo '<ul>';
        for ($col = 0; $col < 3; $col++) {
            //0<3 //3 < 3 no

            echo '<li>' . $Stud[$row][$col] . '</li>'; //stud[0][3]
        }
        echo '</ul>';
    }
    ?>
    <h3>MULTIDIMENSIONAL INDEX ARRAY Ex2</h3>

    <?php $Emp = [
        ['Abc', 'Inter', 19, 25000], //0
        ['Xyz', 'Matric', 18, 35000], //1
        ['Efg', 'Graduate', 20, 45000], //2
    ]; ?>

    <table border = 1>
          <?php for ($row = 0; $row < 3; $row++) {
              echo '<tr>';
              echo "<th colspan = 12>Array[$row]<th>";
              echo '</tr>';
              echo '<tr>';

              for ($col = 0; $col < 4; $col++) {
                  echo "<th>Array[$row][$col]<th>";
                  echo '<td>' . $Emp[$row][$col] . '</td>';
              }
              echo '</tr>';
          } ?>
    </table>


 <h3>MULTIDIMENSIONAL WITH ASSOCIATIVE ARRAY </h3>
 <?php
 $StudentMarks = [
     'Student1' => ['PHP' => 70, 'MVC' => 80, 'JS' => 90],
     'Student2' => ['PHP' => 75, 'MVC' => 85, 'JS' => 95],
     'student3' => ['PHP' => 78, 'MVC' => 88, 'JS' => 99],
 ];
 echo '<pre>';
 print_r($StudentMarks);
 echo '</pre>';
 ?>

 <table border = 1>
    <?php foreach ($StudentMarks as $Key => $Val) {
        echo '<tr>';
        echo '<th colspan = 6>' . $Key . '</th>';
        echo '</tr>';

        echo '<tr>';
        foreach ($Val as $Key2 => $Val2) {
            echo '<th>' . $Key2 . '</th>';
            echo '<td>' . $Val2 . '</td>';
        }
        echo '</tr>';
    } ?> 
 
 </table>
</body>
</html>