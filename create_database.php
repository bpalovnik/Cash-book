<?php
include 'config.php';
$database = $_POST['db'];
$create = "CREATE DATABASE cash_book";
if(mysqli_query($conn, $create))
{
    echo "Database created succesfully!";
}
 else {
    echo "Canot create database " . mysqli_error($conn);
 }
?>
