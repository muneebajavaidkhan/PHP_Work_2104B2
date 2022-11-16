
<?php include 'connection.php'; ?>
<!-- 
insert Code -->
<?php if (isset($_POST['ins'])) {
    $Name = $_POST['name'];
    $Gender = $_POST['gen'];
    $City = $_POST['city'];
    $Education = $_POST['edu'];
    $Fees = $_POST['fee'];
    $Course = $_POST['Course'];

    $Cor = implode(',', $Course); //Array convert into string

    $query = "insert into student (StduentName,Education,Fess,Gender,City,Courses) values ('$Name','$Education','$Fees','$Gender','$City','$Cor')";

    $res = mysqli_query($con, $query); //true //false

    if ($res) {
        //true

        echo '<script>alert("Data Inseted!!");window.location.href = "ViewData.php";</script>';
    } else {
        echo '<script>alert("Data not Inseted!!")</script>';
    }
} ?>





<!-- Update Code -->
<?php if (isset($_POST['Upd'])) {
    $StudnetID = $_POST['StdID'];
    $Name = $_POST['name'];
    $Gender = $_POST['gen'];
    $City = $_POST['city'];
    $Education = $_POST['edu'];
    $Fees = $_POST['fee'];
    $Course = $_POST['Course'];

    $Cor = implode(',', $Course); //Array convert into string

    $query = "update student set StduentName = '$Name',Education = '$Education',Fess = '$Fees',Gender = '$Gender',City = '$City',
        Courses = '$Cor'  where StdId = $StudnetID ";

    $res = mysqli_query($con, $query); //true //false

    if ($res) {
        echo '<script>alert("Data Updated!!");window.location.href = "ViewData.php";</script>';
    } else {
        echo '<script>alert("Data not Updated!!")</script>';
    }
}

?>
