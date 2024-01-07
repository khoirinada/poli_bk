<?php
    require '../../config/koneksi.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $no_rm = $_POST['no_rm'];
        $idJadwal = $_POST['jadwal'];
        $keluhan = $_POST['keluhan'];
        $noAntrian = 0;
        
        $cariPasien = "SELECT * FROM pasien WHERE no_rm = '$no_rm'";
        $queryCariPasien = mysqli_query($mysqli,$cariPasien);
        $data = mysqli_fetch_assoc($queryCariPasien);
        $idPasien = $data['id'];

        $cekData = "SELECT * FROM daftar_poli";
        $queryCekData = mysqli_query($mysqli,$cekData);
        if (mysqli_num_rows($queryCekData)>0) {
            $cekNoAntrian = "SELECT * FROM daftar_poli WHERE id_jadwal = '$idJadwal' ORDER BY no_antrian DESC LIMIT 1";
            $queryNoAntrian = mysqli_query($mysqli,$cekNoAntrian);
            $dataPoli = mysqli_fetch_assoc($queryNoAntrian);
            $antrianTerakhir = (int) $dataPoli['no_antrian'];
            $antrianBaru = $antrianTerakhir += 1;

            $daftarPoli = "INSERT INTO daftar_poli (id_pasien, id_jadwal, keluhan, no_antrian, status_periksa) VALUES ('$idPasien', '$idJadwal', '$keluhan', '$antrianBaru', '0')";
            $queryDaftarPoli = mysqli_query($mysqli,$daftarPoli);
            if ($queryDaftarPoli) {
                echo '<script>alert("Berhasil mendaftar poli");window.location.href="../../pendaftaranPoli.php";</script>';
            }
            else{
                echo '<script>alert("Gagal mendaftar poli");window.location.href="../../pendaftaranPoli.php";</script>';
            }
        }
        else{
            $noAntrian = 1;
            $daftarPoli = "INSERT INTO daftar_poli (id_pasien, id_jadwal, keluhan, no_antrian, status_periksa) VALUES ('$idPasien', '$idJadwal', '$keluhan', '$noAntrian', '0')";
            $queryDaftarPoli = mysqli_query($mysqli,$daftarPoli);
            if ($queryDaftarPoli) {
            echo '<script>alert("Berhasil mendaftar poli");window.location.href="../../pendaftaranPoli.php"</script>';
            }
            else{
                echo '<script>alert("Gagal mendaftar poli");window.location.href="../../pendaftaranPoli.php";</script>';
            }
        }
    }
?>