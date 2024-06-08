<?php

include('../../../con_db/connection.php');
// Mendapatkan data dari formulir atau dari sumber lainnya
$gel = $_POST['gelombang'];
$nomi = $_POST['nominal'];
$nama = $_POST['nama'];
$user = $_POST['username'];
$pass = $_POST['password'];
$sebagai = $_POST['sebagai'];



// Perintah SQL untuk menyimpan data ke dalam tabel
$sql = "INSERT INTO tbl_gel (gelombang, nominal) VALUES ('$gel', '$nomi')";

if (mysqli_query($conn, $sql)) {
    header("location:../../input_gelombang.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}





// Menutup conn
mysqli_close($conn);
