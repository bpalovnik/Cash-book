<?php
$server = "localhost";
$user = "root";
$pass = "";
$conn = mysqli_connect($server, $user, $pass);
if(!$conn)
{
    die ("Error to connect" . mysqli_connect_error());
}
?>

