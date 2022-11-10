<?php
include 'config.php';

$user  = $_POST['username'];
$pass = $_POST['pass'];


$query_validasi = "SELECT * FROM user WHERE username = '$user'";
$query = mysqli_query($link, $query_validasi);

if (mysqli_num_rows($query) == 0) {
    $query_register = mysqli_query($link, "INSERT INTO user(username, pass, level) VALUES ('$user', '$pass', 'user')");
    if ($query_register) { ?>
        <script>
            alert("Data Register sudah berhasil, silahkan login");
            window.location.assign("../login.php");
        </script>
    <?php } 
} else { ?>
    <script>
        alert("Username sudah terdaftar");
        window.location.assign("../login.php");
    </script>
<?php
}
?>