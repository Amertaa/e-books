<?php

    if(!isset($_SESSION["username"])) {
        echo "
                <script>
                        alert('Silahkan login terlebih dahulu!');
                        document.location.href = './login.php';
                </script>
        ";
    }
