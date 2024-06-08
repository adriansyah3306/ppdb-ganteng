<?php
include ('../../../con_db/connection.php');
$id = $_GET['id'];

$id = mysqli_real_escape_string($conn, $id);

$result = mysqli_query($conn, "DELETE FROM user WHERE id = '$id'");
$cek = mysqli_affected_rows($conn);

if ($cek > 0) {
  echo "<script> 
          alert('BERHASIL DI MENGHAPUS');
        </script>";
  header("Location: ../../registrasi.php");
} 
?>
