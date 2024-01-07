<?php
include ("../../config/koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_poli = $_POST["nama_poli"];
    $keterangan = $_POST["keterangan"];

    $query = "INSERT INTO poli (nama_poli, keterangan) VALUES ('$nama_poli', '$keterangan')";
    if (mysqli_query($mysqli, $query)) {
        echo '<script>';
        echo 'alert("Data poli berhasil ditambahkan!");';
        echo 'window.location.href = "../../poli.php";';
        echo '</script>';
        exit();
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($mysqli);
    }
}
mysqli_close($mysqli);
?>