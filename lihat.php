<?php
echo "<head><title>Reservasi Hotel</title></head>";

$fp = fopen("guestbook.txt", "r");
echo "<table border=0>";

    // Kode untuk memproses setiap baris dari file
while ($isi = fgets($fp, 80)) { 
    $pisah = explode("|", trim($isi));

    // Kode untuk memproses baris jika memiliki setidaknya 6 elemen
    if (count($pisah) >= 6) {
        echo "<tr><td>Nama</td><td>: $pisah[0]</td></tr>";
        echo "<tr><td>Alamat</td><td>: $pisah[1]</td></tr>";
        echo "<tr><td>Email</td><td>: $pisah[2]</td></tr>";
        echo "<tr><td>Status</td><td>: $pisah[3]</td></tr>";
        echo "<tr><td>Check-in</td><td>: $pisah[4]</td></tr>";
        echo "<tr><td>Check-out</td><td>: $pisah[5]</td></tr>";
        echo "<tr><td>&nbsp;<hr></td><td>&nbsp;<hr></td></tr>";

        // Kode untuk menangani baris dengan elemen yang tidak lengkap
    } else {
        echo "<tr><td colspan='2'>Ketersediaan Kamar: $isi</td></tr>";
    }
}

echo "</table>";
echo "<a href='index.html'>Klik Disini</a> untuk Reservasi ";

fclose($fp);
?>
