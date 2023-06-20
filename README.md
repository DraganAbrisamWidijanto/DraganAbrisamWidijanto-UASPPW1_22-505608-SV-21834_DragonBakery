## Nama: Dragan Abrisam Widijanto
## NIM: 22/505608/SV/21834

## Penjelasan Website:
Website ini dirancang khusus untuk membantu pengusaha penjual kue dan roti dalam promosi dan pemesanan melalui platform web. Dalam pengalaman browsing yang umum, ketika seseorang secara tidak terduga mengunjungi website toko bakery ini, muncul keinginan untuk melakukan pemesanan. Namun, jika mereka diarahkan untuk menghubungi melalui WhatsApp, seringkali orang merasa malas atau menundanya, bahkan bisa sampai lupa.

Dalam hal ini, tujuan saya adalah memenuhi kebutuhan klien dengan menciptakan kemungkinan bagi pelanggan untuk mengisi pesanan mereka secara langsung di website ini, tanpa perlu diarahkan ke WhatsApp. Dengan demikian, nantinya pihak klien atau toko akan menghubungi pelanggan untuk menindaklanjuti pesanan tersebut.


## Bagaimana website yang dibuat menjawab 4 requirement dasar (kriteria penilaian). 
### 1. Desain rapi mengikuti kaidah atau prinsip desain:
Desain website ini mengusung tema roti yang menggoda dengan dominasi warna krem. Warna krem dipilih untuk menciptakan suasana yang hangat dan nyaman bagi pengunjung. Kesederhanaan dan kelembutan warna ini memperlihatkan dedikasi kami dalam menyajikan produk roti terbaik untuk Pelanggan. Sebagai nuansa yang lembut, krem juga melambangkan kesopanan dan kebaikan yang kami anut dalam berbisnis. Dengan kombinasi yang harmonis, kami berharap website ini dapat mengundang selera Anda untuk menjelajahi dan menikmati kelezatan roti kami. Selamat datang di dunia roti krem yang menggugah selera!

Berikut ini merupakan contoh beberapa warna yang saya gunakan untuk mmebuat website Dragon Bakery:

```css
    . {
        --Krem: rgb(255, 220, 186);
        --white: #fff;
        --black: rgba(0, 0, 0, 0.7);
        --Chocolate: #6c3100;
    }
```

### 2. Website responsive, dapat diakses melalui device: Mobile, Tablet dan Laptop.
Website ini telah dirancang responsif, sehingga dapat diakses melalui berbagai perangkat seperti ponsel, tablet, dan laptop. Saya menggunakan framework Bootstrap untuk mengembangkan website ini karena framework tersebut memudahkan proses pengembangan responsif. Kami telah melakukan pengujian dengan mengubah tampilan layar menjadi mode tablet dan mobile, dan hasilnya adalah tampilan yang tetap teratur dan rapi. Selain boostrap, kami juga menggunakan kode CSS untuk melakukan tampilan responsive

-- style2.css :
```css
 .card-internal {
  background-color: rgba(235, 202, 168, 0.404);
  border-radius: 8px;
  margin-bottom: 10px;
  display: inline-block;
  width: 100%;
  max-width: 250px; /* Ubah ukuran maksimum sesuai dengan kebutuhan Anda */
  padding: 10px;
}

@media (min-width: 576px) {
  .card-internal {
    display: inline-block;
    margin-right: 10px;
    margin-bottom: 10px;
    vertical-align: center;
  }
}
```
kode tersebut menampilkan dalam satu baris (inline) dan memiliki lebar 100% dari lebar container tempatnya berada. Namun, lebar maksimumnya ditetapkan menjadi 250 piksel, sehingga tampilan tidak akan melebar melebihi ukuran tersebut.

Selanjutnya, ada aturan gaya yang menggunakan media query "@media (min-width: 576px)". Ini berarti aturan gaya di dalam media query ini hanya akan berlaku ketika lebar tampilan minimal 576 piksel. Dalam hal ini, ketika lebar tampilan mencapai atau melebihi 576 piksel, kartu akan tetap ditampilkan dalam satu baris, tetapi akan memiliki jarak kanan sebesar 10 piksel dan jarak bawah sebesar 10 piksel. Selain itu, kartu akan diatur secara vertikal menjadi posisi tengah.

Dengan gaya desain ini, tampilan tersebut akan menjadi menarik, dengan warna latar belakang transparan, sudut melengkung, dan tata letak yang responsif tergantung pada lebar tampilan.


### 3. Direct feedback ke pengguna website,
Pada website ini terdapat Menu Navbar yang mengarahkan Posisi: 
Website ini dilengkapi dengan menu navigasi (navbar) yang secara visual mengarahkan ke posisi yang dimau. Fitur ini membantu pengguna untuk pindah ke posisi section tertentu untuk memudahkan navigasi antar section.


terdapat sebuah form untuk mengisi nama, nomor, email, dan pesan.
Jika formnya belum diisi kemudian di submit. maka akan ada peringatan form harus di isi lebih dahulu.
Jika form telah terisi semua kemudian di submit maka akan muncul tulisan seperti ini:

```
Hi XXXXX
Your order id is YYYYY
We will contact you directly via WhatsApp with your phone number ZZZZZ in a few minutes.

untuk X adalah nama, Y adalah order id dan Z adalah nomor telepon
```

Berikut ini merupakan kode untuk membuat feedback ke pengguna website:

-- JScodeBakery.js :
```javascript
function submitForm(event) {
  event.preventDefault();

  var form = event.target.form;

  var name = form.name.value;
  var email = form.email.value;
  var phone = form.phone.value;
  var message = form.message.value;

  if (name === "" || email === "" || phone === "" || message === "") {
    alert("Please fill out all fields before submitting the form.");
  } else {
    var formData = new FormData(form);

    $.ajax({
      url: "proses.php",
      type: "POST",
      data: formData,
      processData: false,
      contentType: false,
      success: function(result) {
        // Mendapatkan order id dari hasil pengiriman
        var orderId = result.trim();

        // Menampilkan pesan hasil pengiriman dengan order id
        var resultHTML = "<h2>Your Form is Submitted.</h2>" +
          "<p>Hi " + name + "!</p>" +
          "<p>Your order id is " + orderId + "</p>" +
          "<p>We will contact you directly via WhatsApp with your phone number " + phone + " in a few minutes.</p>";

        // Menempatkan pesan hasil pengiriman di sebelah elemen dengan id "resultForm"
        var resultForm = document.getElementById("resultForm");
        resultForm.innerHTML = resultHTML;

        // Memperbarui tampilan dengan data pesanan terbaru
        $("#latestOrders").html(result);

        // Mengosongkan form setelah pengiriman berhasil
        form.reset();
      },
      error: function(error) {
        console.log(error);
      }
    });
  }
}
```
pada kode tersebut merupakan kode javascript untuk mengendalikan proses pengiriman formulir dengan menggunakan AJAX dan menangani respons dari server.
Pertama, kode tersebut memeriksa apakah semua kolom formulir (name, email, phone, message) telah diisi. Jika salah satu atau lebih kolom kosong, maka akan muncul sebuah alert dengan pesan "Please fill out all fields before submitting the form."

Jika semua kolom telah diisi, maka formulir akan dikirim menggunakan teknik yang disebut AJAX. Dalam hal ini, formulir dikirim ke server tanpa harus me-refresh halaman web.

Setelah formulir dikirim, kode akan menunggu tanggapan dari server. Jika pengiriman berhasil, maka kode akan menampilkan pesan sukses kepada pengguna. Pesan tersebut berisi informasi seperti nama pengguna, nomor pesanan, dan pesan bahwa pengguna akan dihubungi melalui WhatsApp.

Kemudian, tampilan halaman web akan diperbarui dengan informasi pesanan terbaru yang diperoleh dari server. Selain itu, kolom formulir akan dikosongkan agar pengguna dapat mengisi formulir baru jika diperlukan.

Jika terjadi kesalahan dalam pengiriman formulir atau permintaan ke server, kesalahan tersebut akan dicetak di konsol browser untuk membantu pengembang melacak masalah.

Dengan menggunakan kode tersebut, pengguna dapat mengisi formulir, dan setelah pengiriman berhasil, mereka akan melihat pesan sukses dan halaman akan diperbarui dengan informasi pesanan terbaru.


### 4. Konten dinamis dari database.
Konten dinamis yang saya gunakan berasal dari data order, ketika di submit maka akan masuk ke database. Dari database tersebut akan ditampilkan 5 data terbaru yang masuk ke database. data yang akan ditampilkan adalah nama dan order id. data tersebut ditampilkan didalam box yang ada. berikut ini merupakan kode untuk memasukkan data ke database:

-- proses.php :
```php
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
```
 kode di atas digunakan untuk memasukkan data yang dikirim dari form ke database. lalu akan di tampilkan ke web dengan desain yang rapi menggunakan kode ini:

 ```php
 index2.php :
<div class="col-sm-12 justify-content-center">
      <div class="row justify-content-center">
        <div class="col-sm-12 fade-in">
          <div class="row align-content-center">
            <div class="col-sm-12 card-title mt-2 mb-1 px-0 text-center">
              <p>latest update: Serveral second ago <?php  ?></p>
            </div>
            <div class="latestOrders" style="padding: 0px 10px 0px 10px;">
              <div class="col-sm-12 px-0">
                <div class="card-indonesia mt-0">
                  <div class="row justify-content-center">
                    <?php
                    $query = "SELECT * FROM pesananpelanggan ORDER BY order_id DESC LIMIT 5";
                    $result = mysqli_query($koneksi, $query);
                    $order_count = mysqli_num_rows($result);
                    if ($order_count > 0) {
                      while ($row = mysqli_fetch_assoc($result)) {
                        $order_id = $row['order_id'];
                        $name = $row['name'];
                        ?>
                        <div class="col-sm-4 text-center">
                          <div class="card-internal">
                          <h3><?php echo $name; ?></h3>
                          <p>order id: <?php echo $order_id; ?></p>
                          </div>
                        </div>
                        <?php
                      }
                    } else {
                      echo '<div class="col-sm-12 text-center">';
                      echo '<p>No orders found.</p>';
                      echo '</div>';
                    }
                    ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
```

tampilan juga akan diperbarui selama 5 detik, untuk keperluan mengecek apakah ada data baru yang masuk atau tidak tanpa merefresh webnya terlebih dahulu. disini saya menggunakan kode JS dan Php:

-- JScodeBakery.js :
 ```javascript
function updateLatestOrders() {
  console.log("Updating latest orders...");
  $.ajax({
    url: "get_latest_orders.php",
    type: "GET",
    success: function(result) {
      // Memperbarui tampilan dengan data pesanan terbaru
      $(".latestOrders").html(result);
    },
    error: function(error) {
      console.log(error);
    }
  });
}

// Memperbarui data pesanan setiap 5 detik
setInterval(updateLatestOrders, 5000);
```

-- get_latest_orders.php :
 ```php
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
```