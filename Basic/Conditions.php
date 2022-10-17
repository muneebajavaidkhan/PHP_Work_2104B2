<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <h3>IF ELSE CONDITION</h3>

    <?php
    $side = 56.46;
    $perimeter = $side * 2.0;

    $area = $side * $side;

    if ($side > 15 && $perimeter > 10) {
        $sideValue = $side;
        $perimeterValue = $perimeter;
        $areaValue = $area;
    } else {
        $sideValue = 0;
        $perimeterValue = 0;
        $areaValue = 0;
    }
    ?>

    <table border = 1>
            <tr>
                <th>Side: </th>
                <td> <input type="text" value =  <?= $sideValue ?> > </td>
            </tr>
             <tr>
                <th>Perimeter: </th>
                <td> <input type="text" value =  <?= $perimeterValue ?> > </td>
            </tr>
             <tr>
                <th>Area: </th>
                <td> <input type="text" value =  <?= $areaValue ?> > </td>
            </tr>
    </table>

    <h3>SWITCH CASE</h3>
    <?php
    $message = '';
    $role = 'admin';

    switch ($role) {
        case 'admin':
            $message = 'Welcome Admin';
            break;

        case 'editor':
        case 'author':
            $message = 'Welcome! Do you want to create a new article';
            break;
        case 'subscriber':
            $message = 'Welcome! Checkout some new articles';
            break;

        default:
            $message = 'You are not authorized to access this page';
    }
    echo $message;
    ?>
    <form action="">
            <label for="msg">Message</label>
            <input type="text" value = "<?= $message ?>" id = "msg" name = "message">

            <input type="submit" value = "submit" onclick = "ClickEvent()">
    </form>

    <script>
        function ClickEvent(){
            var ValueGet = document.getElementById('msg').value;
            alert("Successfully! "+ ValueGet);
        }
    </script>
</body>
</html>