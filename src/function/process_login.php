<?php
include 'config.php';

$user  = $_POST['username'];
$pass = $_POST['pass'];

$query = mysqli_query($link, "SELECT * FROM user WHERE username = '$user' AND pass = '$pass'");

if (mysqli_num_rows($query) == 0) {

?>
    <script>
        alert("Username dan Password tidak terdaftar");
        window.location.assign("../register.php");
    </script>
<?php

} else {
    $fetch = mysqli_fetch_assoc($query);
    session_start();
    $_SESSION['id_user'] = $fetch['id_user'];
    $_SESSION['username'] = $user;  
    $_SESSION['pass'] = $pass;

    header("Location:../main.php");
}

?>