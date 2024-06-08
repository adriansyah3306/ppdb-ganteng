<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kwitansi Pembayaran Sekolah</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rT36Jrktb9vO8fB2Otpq/A6V5k1McBcH+JAa5fhxX5UoSv1rZ+6a6iP2fczCYH4T" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
            padding: 20px;
        }

        .kwitansi {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .judul {
            text-align: center;
            margin-bottom: 20px;
        }

        .keterangan {
            font-weight: bold;
        }

        .terima-kasih {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="kwitansi">
                    <h2 class="judul">Kwitansi Pembayaran Sekolah</h2>
                    <?php   
                    include('con_db/connection.php');
                    $id = $_GET['id']; 
                    $sql = "SELECT * FROM data_bayar WHERE id = '$id'"; // Ganti '1' dengan id pembayaran yang diinginkan
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // Output data setiap baris
                        while($row = $result->fetch_assoc()) {
                            // Informasi pembayaran
                            $nama_siswa = $row["nama_siswa"];
                            $bayar = $row["bayar"];
                            $tanggal_pembayaran = $row["tanggal"];
                            $jumlah_pembayaran = $row["jumlah"];

                            // Mencetak kwitansi
                            echo "<table  class='table'>";
                            echo "<tr><td class='keterangan'>Nama Siswa</td><td>" . $nama_siswa . "</td></tr>";
                            echo "<tr><td class='keterangan'>Bayar</td><td>" . $bayar . "</td></tr>";
                            echo "<tr><td class='keterangan'>Tanggal Pembayaran</td><td>" . $tanggal_pembayaran . "</td></tr>";
                            echo "<tr><td class='keterangan'>Jumlah Pembayaran</td><td>Rp." . $jumlah_pembayaran . "</td></tr>";
                            echo "</table>";
                            echo "<p class='terima-kasih'>Terima kasih atas pembayaran Anda.</p>";
                        }
                    } else {
                        echo "<p class='terima-kasih'>0 hasil</p>";
                    }
                    // Menutup koneksi database
                    $conn->close();
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    
    window.onload = function() {
      window.print(); 
    };
  </script>
</html>
