<?php
include ("../../config/koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $password = $_POST["nama"];
    $no_hp = $_POST["no_hp"];
    $poli = $_POST["poli"];

    // Query tambah data dokter
    $query = "INSERT INTO dokter (nama, alamat, password, no_hp, id_poli) VALUES ('$nama', '$alamat', '$password', '$no_hp', '$poli')";
    
    if (mysqli_query($mysqli, $query)) {
        echo '<script>';
        echo 'alert("Data dokter berhasil ditambahkan!");';
        echo 'window.location.href = "../../dokter.php";';
        echo '</script>';
        exit();
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($mysqli);
    }
}
mysqli_close($mysqli);
?>