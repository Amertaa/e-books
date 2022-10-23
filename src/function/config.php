<?php
session_start();

$host = "localhost";
$user = "root";
$pass = "";
$db   = "e-books";

$link = mysqli_connect($host,$user,$pass,$db) or die(mysqli_error($link));
$result = mysqli_query($link, "SELECT * FROM salesitems");

function query($query)
{
    global $link;
    $result = mysqli_query($link, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;

}
