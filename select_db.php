<?php
include 'config.php';
$query = "SHOW DATABASES";
$res = mysqli_query($conn, $query);
echo '<form action="select.php" method="post">';
echo '<table style="border: 0px">';
echo '<tr style="background: #cccccc;">
        <td style="width: 150px; text-align: center">SELECT DATABASE</td>
      </tr>';
echo '<tr>';
echo '<td>';
echo '<select id="select_db" name="select_db">';
while ($row = mysqli_fetch_assoc($res)) {
    echo '<option>';
    echo $row['Database'] . "\n";
    echo '</option>';
}
echo '</select>';
echo '<td>';
echo '</tr>';
echo '<tr>';
echo '<td>';
echo '<input type="submit" value="SELECT DATABASE">';
echo '</td>';
echo '</tr>';
echo '</table>';
echo '</form>';
?>
