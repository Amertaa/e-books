<?php

require '../function/config.php';

// $name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['pass'];

$login = mysqli_query($link, "SELECT * FROM user WHERE username='$username' and pass='$password'");
$count = mysqli_num_rows($login);

if ($count > 0) {
    $data = mysqli_fetch_assoc($login);

    if ($data['level'] == 'admin') {
        $_SESSION['name'] = $name;
        $_SESSION['username'] = $username;
        $_SESSION['level'] = 'admin';
        header("location:../admin.php");
    } else if ($data['level'] == 'user') {
        $name = $data['name'];
        $_SESSION['name'] = $name;
        $_SESSION['username'] = $username;
        $_SESSION['level'] = 'user';
        header("location:../main.php");
    } else {
        echo
        "
            <script>
            alert('Username atau password anda salah!');
            document.location.href ='../login.php';
            </script>
        ";
    }
} else {
    echo
    "
            <script>
            alert('Username atau password anda salah!');
            document.location.href ='../login.php';
            </script>
        ";
}
