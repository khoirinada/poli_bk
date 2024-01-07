<?php
include("../../config/koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai dari form
    $id = $_POST["id"];
    $nama = $_POST["nama_dokter"];
    $password = $_POST["nama_dokter"];
    $alamat = $_POST["alamat"];
    $no_hp = $_POST["no_hp"];
    $nama_poli = $_POST["poli"];

    // Query update data dokter
    $query = "UPDATE dokter SET 
        nama = '$nama',
        password = '$password',
        alamat = '$alamat',
        no_hp = '$no_hp',
        id_poli = '$nama_poli'
        WHERE id = '$id'";

    if (mysqli_query($mysqli, $query)) {
        echo '<script>';
        echo 'alert("Data dokter berhasil diubah!");';
        echo 'window.location.href = "../../dokter.php";';
        echo '</script>';
        exit();
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($mysqli);
    }
}
mysqli_close($mysqli);
?>