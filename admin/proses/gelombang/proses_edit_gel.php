<?php

include ('../../../con_db/connection.php');

// Mendapatkan data dari formulir atau dari sumber lainnya
$id = $_POST['id'];
$gel = $_POST['gelombang'];
$nomi = $_POST['nominal'];



// Perintah SQL untuk menyimpan data ke dalam tabel
$query = "UPDATE tbl_gel SET gelombang='$gel', nominal='$nomi' WHERE id='$id'";

if (mysqli_query($conn, $query)) {
    header("location:../../gelombang.php");
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}

// Menutup conn
mysqli_close($conn);
