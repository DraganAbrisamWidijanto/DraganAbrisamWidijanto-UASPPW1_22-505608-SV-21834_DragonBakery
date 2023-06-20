<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$database = "dragonbakery";

$koneksi = mysqli_connect($servername, $username, $password, $database);

// Memeriksa apakah koneksi berhasil
if (!$koneksi) {
  die("Connection failed: " . mysqli_connect_error());
}

$query_latest_orders = "SELECT * FROM pesananpelanggan ORDER BY order_id DESC LIMIT 5";
$result_latest_orders = mysqli_query($koneksi, $query_latest_orders);

// Mengecek apakah ada pesanan terbaru
$query_latest_orders = "SELECT * FROM pesananpelanggan ORDER BY order_id DESC LIMIT 5";
$result_latest_orders = mysqli_query($koneksi, $query_latest_orders);

// Mengecek apakah ada pesanan terbaru
if (mysqli_num_rows($result_latest_orders) > 0) {
  $order_count = mysqli_num_rows($result_latest_orders);
  $column_count = 3; // Jumlah kolom tetap 3 untuk tampilan awal
  $counter = 0;

  // Membagi pesanan ke dalam kolom
  while ($row = mysqli_fetch_assoc($result_latest_orders)) {
    // Tampilkan data pesanan dalam elemen HTML
    if ($counter % $column_count == 0) {
      echo '<div class="row justify-content-center">';
    }
    echo '<div class="col-sm-4 text-center">';
    echo '<div class="card-internal">';
    echo '<h3>' . $row['name'] . '</h3>';
    echo '<p>order id: ' . $row['order_id'] . '</p>';
    echo '</div>';
    echo '</div>';
    if ($counter % $column_count == $column_count - 1 || $counter == $order_count - 1) {
      echo '</div>';
    }
    $counter++;
  }
} else {
  echo '<div class="col-sm-12 text-center">';
  echo '<p>No latest orders available.</p>';
  echo '</div>';
}

?>
