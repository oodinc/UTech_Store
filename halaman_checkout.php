<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTech Store | Checkout</title>

    <!-- icon link  -->
    <link rel="icon" href="img/logo.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <!-- font link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <!-- css link -->
    <link rel="stylesheet" href="css/style_Checkout.css">

</head>

<body>

    <!-- header section start -->
    <header>
        <a href="#home" class="logo"><img src="img/logo.png">UTech Store | Checkout</a>
    </header>
    <!-- header section end -->

    <section class="order" id="order">
        <form method="POST" action="halaman_checkout.php" id="myForm">
            <div class="box-container">
                <div class="box">
                    <h3>Data Diri Pemesan</h3>
                    <table>
                        <tr>
                            <td style="text-align: left;">Nama Pemesan</td>
                            <td>:</td>
                            <td style="text-transform: none; text-align: left;"><?php echo $_POST['nama']; ?></td>
                        </tr>
                        <tr>
                            <td style="text-align: left;">Alamat</td>
                            <td>:</td>
                            <td style="text-transform: none; text-align: left;"><?php echo $_POST['alamat']; ?></td>
                        </tr>
                        <tr>
                            <td style="text-align: left;">No. WhatsApp</td>
                            <td>:</td>
                            <td style="text-align: left;"><?php echo $_POST['nomor']; ?></td>
                        </tr>
                        <tr>
                            <td style="text-align: left;">Tanggal dan Waktu Pemesanan</td>
                            <td>:</td>
                            <td style="text-align: left;"><?php echo $_POST['waktu_pemesanan']; ?></td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="box-container2">
                <div class="box">
                    <h3>Data Pesanan</h3>
                    <div class="checkout-container">
                        <?php
                        // proses.php

                        // ambil data dari form
                        $jumlahProduk1 = $_POST["jumlahProduk1"];
                        $jumlahProduk2 = $_POST["jumlahProduk2"];
                        $jumlahProduk3 = $_POST["jumlahProduk3"];
                        $jumlahProduk4 = $_POST["jumlahProduk4"];
                        $jumlahProduk5 = $_POST["jumlahProduk5"];
                        $jumlahProduk6 = $_POST["jumlahProduk6"];
                        $jumlahProduk7 = $_POST["jumlahProduk7"];
                        $jumlahProduk8 = $_POST["jumlahProduk8"];
                        $jumlahProduk9 = $_POST["jumlahProduk9"];
                        $jumlahProduk10 = $_POST["jumlahProduk10"];
                        $catatan1 = $_POST["catatan1"];
                        $catatan2 = $_POST["catatan2"];
                        $catatan3 = $_POST["catatan3"];
                        $catatan4 = $_POST["catatan4"];
                        $catatan5 = $_POST["catatan5"];
                        $catatan6 = $_POST["catatan6"];
                        $catatan7 = $_POST["catatan7"];
                        $catatan8 = $_POST["catatan8"];
                        $catatan9 = $_POST["catatan9"];
                        $catatan10 = $_POST["catatan10"];

                        // buat array untuk menyimpan data pesanan
                        $pesanan = array();

                        // tambahkan data pesanan jus alpukat jika ada
                        if ($jumlahProduk1 > 0) {
                            for ($i = 1; $i <= $jumlahProduk1; $i++) {
                                $jenisMinuman = $_POST["minuman1_" . $i];
                                $namaMenu = "Jus Alpukat";
                                $found = false;
                                foreach ($pesanan as $key => $value) {
                                    if ($value["nama"] == $namaMenu && $value["kategori"] == $jenisMinuman) {
                                        $pesanan[$key]["jumlah"]++;
                                        $found = true;
                                        break;
                                    }
                                }
                                if (!$found) {
                                    $pesanan[] = array(
                                        "nama" => $namaMenu,
                                        "kategori" => $jenisMinuman,
                                        "jumlah" => 1,
                                        "catatan" => $catatan1
                                    );
                                }
                            }
                        }

                        // tambahkan data pesanan jus apel jika ada
                        if ($jumlahProduk2 > 0) {
                            for ($i = 1; $i <= $jumlahProduk2; $i++) {
                                $jenisMinuman = $_POST["minuman2_" . $i];
                                $namaMenu = "Jus Apel";
                                $found = false;
                                foreach ($pesanan as $key => $value) {
                                    if ($value["nama"] == $namaMenu && $value["kategori"] == $jenisMinuman) {
                                        $pesanan[$key]["jumlah"]++;
                                        $found = true;
                                        break;
                                    }
                                }
                                if (!$found) {
                                    $pesanan[] = array(
                                        "nama" => $namaMenu,
                                        "kategori" => $jenisMinuman,
                                        "jumlah" => 1,
                                        "catatan" => $catatan2
                                    );
                                }
                            }
                        }

                        // tambahkan data pesanan jus jambu jika ada
                        if ($jumlahProduk3 > 0) {
                            for ($i = 1; $i <= $jumlahProduk3; $i++) {
                                $jenisMinuman = $_POST["minuman3_" . $i];
                                $namaMenu = "Jus Jambu";
                                $found = false;
                                foreach ($pesanan as $key => $value) {
                                    if ($value["nama"] == $namaMenu && $value["kategori"] == $jenisMinuman) {
                                        $pesanan[$key]["jumlah"]++;
                                        $found = true;
                                        break;
                                    }
                                }
                                if (!$found) {
                                    $pesanan[] = array(
                                        "nama" => $namaMenu,
                                        "kategori" => $jenisMinuman,
                                        "jumlah" => 1,
                                        "catatan" => $catatan3
                                    );
                                }
                            }
                        }

                        // tambahkan data pesanan jus jeruk jika ada
                        if ($jumlahProduk4 > 0) {
                            for ($i = 1; $i <= $jumlahProduk4; $i++) {
                                $jenisMinuman = $_POST["minuman4_" . $i];
                                $namaMenu = "Jus Jeruk";
                                $found = false;
                                foreach ($pesanan as $key => $value) {
                                    if ($value["nama"] == $namaMenu && $value["kategori"] == $jenisMinuman) {
                                        $pesanan[$key]["jumlah"]++;
                                        $found = true;
                                        break;
                                    }
                                }
                                if (!$found) {
                                    $pesanan[] = array(
                                        "nama" => $namaMenu,
                                        "kategori" => $jenisMinuman,
                                        "jumlah" => 1,
                                        "catatan" => $catatan4
                                    );
                                }
                            }
                        }

                        // tambahkan data pesanan jus nanas jika ada
                        if ($jumlahProduk5 > 0) {
                            for ($i = 1; $i <= $jumlahProduk5; $i++) {
                                $jenisMinuman = $_POST["minuman5_" . $i];
                                $namaMenu = "Jus Nanas";
                                $found = false;
                                foreach ($pesanan as $key => $value) {
                                    if ($value["nama"] == $namaMenu && $value["kategori"] == $jenisMinuman) {
                                        $pesanan[$key]["jumlah"]++;
                                        $found = true;
                                        break;
                                    }
                                }
                                if (!$found) {
                                    $pesanan[] = array(
                                        "nama" => $namaMenu,
                                        "kategori" => $jenisMinuman,
                                        "jumlah" => 1,
                                        "catatan" => $catatan5
                                    );
                                }
                            }
                        }

                        // tambahkan data pesanan jus semangka jika ada
                        if ($jumlahProduk6 > 0) {
                            for ($i = 1; $i <= $jumlahProduk6; $i++) {
                                $jenisMinuman = $_POST["minuman6_" . $i];
                                $namaMenu = "Jus Semangka";
                                $found = false;
                                foreach ($pesanan as $key => $value) {
                                    if ($value["nama"] == $namaMenu && $value["kategori"] == $jenisMinuman) {
                                        $pesanan[$key]["jumlah"]++;
                                        $found = true;
                                        break;
                                    }
                                }
                                if (!$found) {
                                    $pesanan[] = array(
                                        "nama" => $namaMenu,
                                        "kategori" => $jenisMinuman,
                                        "jumlah" => 1,
                                        "catatan" => $catatan6
                                    );
                                }
                            }
                        }

                        // tambahkan data pesanan jus stroberi jika ada
                        if ($jumlahProduk7 > 0) {
                            for ($i = 1; $i <= $jumlahProduk7; $i++) {
                                $jenisMinuman = $_POST["minuman7_" . $i];
                                $namaMenu = "Jus Stroberi";
                                $found = false;
                                foreach ($pesanan as $key => $value) {
                                    if ($value["nama"] == $namaMenu && $value["kategori"] == $jenisMinuman) {
                                        $pesanan[$key]["jumlah"]++;
                                        $found = true;
                                        break;
                                    }
                                }
                                if (!$found) {
                                    $pesanan[] = array(
                                        "nama" => $namaMenu,
                                        "kategori" => $jenisMinuman,
                                        "jumlah" => 1,
                                        "catatan" => $catatan7
                                    );
                                }
                            }
                        }

                        // tambahkan data pesanan rujak buah jika ada
                        if ($jumlahProduk8 > 0) {
                            for ($i = 1; $i <= $jumlahProduk8; $i++) {
                                $jenisMinuman = $_POST["minuman8_" . $i];
                                $namaMenu = "Rujak Buah";
                                $found = false;
                                foreach ($pesanan as $key => $value) {
                                    if ($value["nama"] == $namaMenu && $value["kategori"] == $jenisMinuman) {
                                        $pesanan[$key]["jumlah"]++;
                                        $found = true;
                                        break;
                                    }
                                }
                                if (!$found) {
                                    $pesanan[] = array(
                                        "nama" => $namaMenu,
                                        "kategori" => $jenisMinuman,
                                        "jumlah" => 1,
                                        "catatan" => $catatan8
                                    );
                                }
                            }
                        }

                        // tambahkan data pesanan salad buah jika ada
                        if ($jumlahProduk9 > 0) {
                            for ($i = 1; $i <= $jumlahProduk9; $i++) {
                                $jenisMinuman = $_POST["minuman9_" . $i];
                                $namaMenu = "Salad Buah";
                                $found = false;
                                foreach ($pesanan as $key => $value) {
                                    if ($value["nama"] == $namaMenu && $value["kategori"] == $jenisMinuman) {
                                        $pesanan[$key]["jumlah"]++;
                                        $found = true;
                                        break;
                                    }
                                }
                                if (!$found) {
                                    $pesanan[] = array(
                                        "nama" => $namaMenu,
                                        "kategori" => $jenisMinuman,
                                        "jumlah" => 1,
                                        "catatan" => $catatan9
                                    );
                                }
                            }
                        }

                        // tambahkan data pesanan sop buah jika ada
                        if ($jumlahProduk10 > 0) {
                            for ($i = 1; $i <= $jumlahProduk10; $i++) {
                                $jenisMinuman = $_POST["minuman10_" . $i];
                                $namaMenu = "Sop Buah";
                                $found = false;
                                foreach ($pesanan as $key => $value) {
                                    if ($value["nama"] == $namaMenu && $value["kategori"] == $jenisMinuman) {
                                        $pesanan[$key]["jumlah"]++;
                                        $found = true;
                                        break;
                                    }
                                }
                                if (!$found) {
                                    $pesanan[] = array(
                                        "nama" => $namaMenu,
                                        "kategori" => $jenisMinuman,
                                        "jumlah" => 1,
                                        "catatan" => $catatan10
                                    );
                                }
                            }
                        }

                        // tampilkan data pesanan dalam bentuk tabel
                        $harga_satuan = array(
                            "Jus Alpukat" => 7000,
                            "Jus Apel" => 7000,
                            "Jus Jambu" => 7000,
                            "Jus Jeruk" => 7000,
                            "Jus Nanas" => 7000,
                            "Jus Semangka" => 7000,
                            "Jus Stroberi" => 7000,
                            "Rujak Buah" => 10000,
                            "Salad Buah" => 10000,
                            "Sop Buah" => 10000
                        );

                        echo "<table>
    <tr>
        <th>No.</th>
        <th>Produk</th>
        <th>Kategori</th>
        <th>Catatan</th>
        <th>Jumlah</th>
        <th>Harga Satuan</th>
        <th>Subtotal</th>
    </tr>";

                        $totalHarga = 0;

                        foreach ($pesanan as $index => $menu) {
                            $harga = $harga_satuan[$menu["nama"]];
                            $subtotal = $harga * $menu["jumlah"];
                            $totalHarga += $subtotal;

                            echo "<tr>
        <td>" . ($index + 1) . "</td>
        <td>" . $menu["nama"] . "</td>
        <td>" . $menu["kategori"] . "</td>
        <td>" . $menu["catatan"] . "</td>
        <td>" . $menu["jumlah"] . "</td>
        <td>Rp" . number_format($harga, 0, ",", ".") . "</td>
        <td>Rp" . number_format($subtotal, 0, ",", ".") . "</td>
    </tr>";
                        }

                        // tampilkan total harga
                        echo "<tr>
    <td colspan='6'>Total Harga:</td>
    <td>Rp" . number_format($totalHarga, 0, ",", ".") . "</td>
</tr>";

                        echo "</table>";

                        ?>
                    </div>
                </div>
            </div>
            <input type="submit" formaction="/halaman_thankYou.php" value="pesan sekarang" class="btn">
        </form>
    </section>

    <!-- footer section start-->
    <section class="footer">
        <div class="box-container">

            <div class="box">
                <h3>hubungi kami</h3>
                <a href="http://www.wasap.my/6281909561200" target="_blank">+62 819 0956 1200</a>
                <a href="https://www.instagram.com/direct/t/340282366841710300949128165706432124526" target="_blank" style="text-transform: none;">@m_saifuddin711</a>
                <a href="mailto:masoodinc1@gmail.com" target="_blank" style="text-transform: none;">masoodinc1@gmail.com</a>
            </div>

            <div class="box">
                <h3>ikuti kami</h3>
                <a href="https://www.instagram.com/m_saifuddin711" target="_blank">instagram</a>
                <a href="https://www.facebook.com/pedangagama.islam.7/" target="_blank">facebook</a>
                <a href="https://github.com/oodinc" target="_blank">gitHub</a>
            </div>
        </div>

        <div class="credit"><i class="far fa-copyright"></i> 2023 Udin Technology</div>
    </section>
    <!-- footer section end-->
    
    <!-- loader start -->
    <div class="loader">
        <div class="spinner"></div>
    </div>
    <!-- loader end -->

    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <!-- link js -->
    <script src="js/script_Checkout.js"></script>

</body>

</html>