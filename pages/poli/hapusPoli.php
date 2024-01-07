<?php
include ("../../config/koneksi.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $query = "DELETE FROM poli WHERE id = '$id'";
    if (mysqli_query($mysqli, $query)) {
        echo '<script>';
        echo 'alert("Data poli berhasil dihapus!");';
        echo 'window.location.href = "../../poli.php";';
        echo '</script>';
        exit();
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($mysqli);
    }
}
mysqli_close($mysqli);
?>