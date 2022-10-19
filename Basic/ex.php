<?php

echo '<pre>';
print_r($_GET);
echo '</pre>';

if (isset($_GET['btn'])) {
    $EmailValue = $_GET['email'];
    $PassValue = $_GET['pass'];

    if ($EmailValue == '' || $PassValue == '') {
        echo "<script>alert('Please fill all fields');</script>";
    } else {
        if ($EmailValue == 'Admin@gmail.com' && $PassValue == 'admin123') {
            echo "<script>alert('Login Successfully!!');</script>";
            echo "<p>Admin Login:$EmailValue </p>";
            echo "<p>Admin Pass:$PassValue </p>";
        } else {
            echo "<script>alert('Login Failed!!');</script>";
        }
    }
}

?>
