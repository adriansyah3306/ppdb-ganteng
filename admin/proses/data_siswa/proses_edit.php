<?php
include ('../../../con_db/connection.php');
$noPendaftar = $_POST['no_pendaftar'];
$namaSiswa = $_POST['nama_siswa'];
$asal = $_POST['asal_sekolah'];
$jurusan = $_POST['jurusan'];
$tanggal = $_POST['tanggal'];

$update_siswa_query = $update_siswa_query = "UPDATE data_siswa 
SET nama_siswa='$namaSiswa', asal_sekolah='$asal',jurusan='$jurusan',tanggal='$tanggal' 
WHERE no_pendaftaran='$noPendaftar'";
if (mysqli_query($conn, $update_siswa_query)) {
    $update_ortu_query = "UPDATE data_ortu SET nama_siswa='$namaSiswa' 
    WHERE id=(SELECT id FROM data_siswa WHERE no_pendaftaran='$noPendaftar')";
    if (!mysqli_query($conn, $update_ortu_query)) {
        echo "Error: " . $update_ortu_query . "<br>" . mysqli_error($conn);
    }
    $update_wali_query = "UPDATE data_wali SET nama_siswa='$namaSiswa' 
    WHERE id=(SELECT id FROM data_siswa WHERE no_pendaftaran='$noPendaftar')";
    if (!mysqli_query($conn, $update_wali_query)) {
        echo "Error: " . $update_wali_query . "<br>" . mysqli_error($conn);
    }
    header("location:../../data_siswa.php");
} else {
    echo "Error: " . $update_siswa_query . "<br>" . mysqli_error($conn);
}
mysqli_close($koneksi);
?>
