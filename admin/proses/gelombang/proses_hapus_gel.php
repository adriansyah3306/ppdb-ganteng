<?php
include ('../../../con_db/connection.php');
$id = $_GET['id'];

// Properly escape the value to prevent SQL injection
$id = mysqli_real_escape_string($conn, $id);

$result = mysqli_query($conn, "DELETE FROM tbl_gel WHERE id = '$id'");
$cek = mysqli_affected_rows($conn);

if ($cek > 0) {
  echo "<script> 
          alert('BERHASIL DI MENGHAPUS');
        </script>";
  header("Location: ../../gelombang.php");
} else {
  echo "<script> 
          alert('GAGAL DI MENGHAPUS');
        </script>";
  header("Location: ../../admin.php");
}

?>
