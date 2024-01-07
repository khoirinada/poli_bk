<?php
    require '../../config/koneksi.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $tahun = date('Y');
        $bulan = date("m");

        $nama = $_POST['nama'];
        $no_ktp = $_POST['no_ktp'];
        $alamat = $_POST['alamat'];
        $password = $_POST['password'];
        $no_hp = $_POST['no_hp'];

        $cariData = "SELECT * FROM pasien";
        $query = mysqli_query($mysqli,$cariData);
        $no_rm = $tahun.$bulan.'-'.'001';

        // mengecek apakah ktp tersedia apa engga
        $cekNoKTP = "SELECT * FROM pasien WHERE no_ktp = '$no_ktp'";
        $cekDataKTP = mysqli_query($mysqli,$cekNoKTP);
        if (mysqli_num_rows($cekDataKTP)>0) {
            echo '<script>alert("No KTP telah terdaftar sebelumnya");
            window.location.href="../../register.php";</script>';
        }
        else{
            if (mysqli_num_rows($query) < 1) {
                $insertData = "INSERT INTO pasien (nama, password, alamat, no_ktp, no_hp, no_rm) VALUES ('$nama', '$password', '$alamat', '$no_ktp', '$no_hp', '$no_rm')";
                $queryInsert = mysqli_query($mysqli,$insertData);
                if ($queryInsert) {
                    echo '<script>alert("Pendaftaran akun berhasil");window.location.href="../../loginUser.php";</script>';
                }
                else {
                    echo '<script>alert("Pendaftaran akun gagal");window.location.href="../../register.php";</script>';
                }
            }
            else {
                $getDataTerakhir = 'SELECT * FROM pasien ORDER BY no_rm DESC limit 1';
                $querygetData = mysqli_query($mysqli, $getDataTerakhir);
                $dataTerakhir = mysqli_fetch_assoc($querygetData);
                $substring = substr($dataTerakhir['no_rm'], 7);
                $listTerakhir = (int) $substring;
                $listTerakhir += 1;

                if($listTerakhir > 99){
                    $no_rm_baru = $tahun.$bulan.'-'.$listTerakhir;
                }
                else if ($listTerakhir > 9 && $listTerakhir < 100) {
                    $no_rm_baru = $tahun.$bulan.'-'.'0'.$listTerakhir;
                }
                else if($listTerakhir <= 9){
                    $no_rm_baru = $tahun.$bulan.'-'.'00'.$listTerakhir;
                }
                $insertDataBaru = "INSERT INTO pasien (nama, password, alamat, no_ktp, no_hp, no_rm) VALUES ('$nama', '$password', '$alamat', '$no_ktp', '$no_hp', '$no_rm_baru')";
                $queryInsertBaru = mysqli_query($mysqli,$insertDataBaru);
    
                if ($queryInsertBaru) {
                    echo '<script>alert("Pendaftaran akun berhasil");window.location.href="../../loginUser.php";</script>';
                }
                else{
                    echo '<script>alert("Pendaftaran akun gagal");window.location.href="../../loginUser.php";</script>';
                }
            }
        }

}
mysqli_close($mysqli);
?>