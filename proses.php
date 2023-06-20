<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "dragonbakery";

// Membuat koneksi
$koneksi = mysqli_connect($servername, $username, $password, $database);

// Memeriksa koneksi
if ($koneksi->connect_error) {
    die('Koneksi database gagal: ' . $koneksi->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$query = "SELECT MAX(CAST(SUBSTRING(order_id, 3) AS UNSIGNED)) AS max_order_id FROM pesananpelanggan";
$result = mysqli_query($koneksi, $query);
$row = mysqli_fetch_assoc($result);
$max_order_id = $row['max_order_id'];
$new_order_id = 'od' . str_pad(($max_order_id + 1), 3, '0', STR_PAD_LEFT);

// Memeriksa apakah order_id baru sudah ada dalam tabel
$query_check = "SELECT COUNT(*) AS count FROM pesananpelanggan WHERE order_id = '$new_order_id'";
$result_check = mysqli_query($koneksi, $query_check);
$row_check = mysqli_fetch_assoc($result_check);
$count = $row_check['count'];

if ($count > 0) {
  // Jika order_id sudah ada, tambahkan angka unik di belakangnya
  $unique_number = 1;
  $new_order_id = 'od' . str_pad(($max_order_id + $unique_number), 3, '0', STR_PAD_LEFT);

  // Memeriksa lagi apakah order_id baru sudah ada dalam tabel
  $query_check = "SELECT COUNT(*) AS count FROM pesananpelanggan WHERE order_id = '$new_order_id'";
  $result_check = mysqli_query($koneksi, $query_check);
  $row_check = mysqli_fetch_assoc($result_check);
  $count = $row_check['count'];

  // Mencari angka unik yang belum digunakan
  while ($count > 0) {
    $unique_number++;
    $new_order_id = 'od' . str_pad(($max_order_id + $unique_number), 3, '0', STR_PAD_LEFT);

    $query_check = "SELECT COUNT(*) AS count FROM pesananpelanggan WHERE order_id = '$new_order_id'";
    $result_check = mysqli_query($koneksi, $query_check);
    $row_check = mysqli_fetch_assoc($result_check);
    $count = $row_check['count'];
  }
}

// Menyimpan data ke tabel PesananPelanggan dengan order_id baru
$query = "INSERT INTO pesananpelanggan (order_id, name, email, phone, message) VALUES ('$new_order_id', '$name', '$email', '$phone', '$message')";
$result = mysqli_query($koneksi, $query);

if ($result) {
  // Mengirim kembali order_id sebagai respons
  echo $new_order_id;
} else {
  // Mengirim kembali pesan error jika terjadi kesalahan
  echo "Error: " . mysqli_error($koneksi);
}


?>
<!-- Blok HTML formulir -->
<div class="Gsec7 container pt-12 lg:pt-14 xl:pt-20 mt-3" id="section7">
  <!-- ... Kode HTML lainnya ... -->
</div>