<?php
// Memastikan bahwa variabel-variabel telah diset sebelum digunakan
$nama = isset($_POST['nama']) ? $_POST['nama'] : '';
$alamat = isset($_POST['alamat']) ? $_POST['alamat'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$status = isset($_POST['status']) ? $_POST['status'] : '';
$check_in = isset($_POST['check_in']) ? $_POST['check_in'] : '';
$check_out = isset($_POST['check_out']) ? $_POST['check_out'] : '';

// Membuka file dan menambahkan data baru
$fp = fopen("guestbook.txt", "a+");
fputs($fp, "$nama|$alamat|$email|$status|$check_in|$check_out\n");
fclose($fp);

echo "<head><title>Reservasi Hotel</title></head>";
echo "Terima Kasih Atas Partisipasi Anda <br>";
echo "<a href='index.html'> Reservasi </a><br>";
echo "<a href='lihat.php'> Lihat Ketersediaan Kamar </a><br>";
?>
