<?php
include ('../../../con_db/connection.php');
$id = $_POST['id'];
$nama = $_POST['nama'];
$user = $_POST['username'];
$pass = $_POST['password'];
$sebagai = $_POST['sebagai'];
$query = "UPDATE user SET nama='$nama', username='$user', password='$pass',level='$sebagai' WHERE id='$id'";

if (mysqli_query($conn, $query)) {
    header("location:../../registrasi.php");
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
