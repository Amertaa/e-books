<?php
$post = json_decode(file_get_contents("php://input"), true);
$id = $post['id_product'];
$isFound = false;
$json;

session_id($_COOKIE['PHPSESSID']);
session_start();

foreach ($_SESSION['cart'] as $key => $value) {
    if ($id !== $value['id_product'])
        return;

    unset($_SESSION['cart'][$key]);
    $isFound = true;
    break;
}

if ($isFound) {
    $json = json_encode([
        'message' => 'Delete success!',
        'success' => true
    ]);
} else {
    $json = json_encode([
        'success' => false,
        'message' => 'Error'
    ]);
}

header('Content-Type: application/json');
echo $json;
