<?php
session_start();

$host = "localhost";
$user = "root";
$pass = "";
$db   = "e-books";


$link = mysqli_connect($host,$user,$pass,$db) or die(mysqli_error($link));


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

// Function to get the data from the database
function getData()
    {
        global $link;
        $sql = "SELECT * FROM product";
    
        $result = mysqli_query($link, $sql);
    
        if(mysqli_num_rows($result) > 0){
            return $result;
        }
    }


