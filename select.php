<?php
include 'config.php';
$select = $_POST['select_db'];
$query = "USE $select";
if(mysqli_query($conn, $query))
{
    echo 'You select ' . $query . ' database';
}
else
{
    echo 'Cannot select database' . mysqli_error($conn);
}
include 'select_db.php';
?>
