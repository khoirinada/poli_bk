<?php
include("../../config/koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai dari form
    $id = $_POST["id"];
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $no_ktp = $_POST["no_ktp"];
    $no_hp = $_POST["no_hp"];

    $query = "UPDATE pasien SET 
        nama = '$nama', 
        alamat = '$alamat', 
        no_ktp = '$no_ktp',
        no_hp = '$no_hp'
        WHERE id = '$id'";

    if (mysqli_query($mysqli, $query)) {
        echo '<script>';
        echo 'alert("Data pasien berhasil diubah!");';
        echo 'window.location.href = "../../pasien.php";';
        echo '</script>';
        exit();
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($mysqli);
    }
}
mysqli_close($mysqli);
?>