<?php
include 'config.php';
$database = $_POST['db'];
$create = "CREATE DATABASE $database";
if(mysqli_query($conn, $create))
{
    echo "Database created succesfully!";
}
 else {
    echo "Canot create database " . mysqli_error($conn);
 }
 include 'createdatabase.html';
?>
